<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PbldReg extends Component
{
    // ADD TABLE IN DATABASE: pbld, pbld_sessions

    public $PSAid=null, $first_name, $middle_initial, $last_name, $hospitalName, $hospitalAddress;
    public $email, $contactNumber, $prcNumber, $topic, $name, $show, $res;
    public $message, $showMessage="enabled", $showButton = false;

    public function showChecker(){
        // dd("checker");
        if($this->show)
            $this->show = false;
        else
            $this->show = true; 
    }
    public function render()
    {

        if(strlen($this->name) >= 3){
            // dd(strlen($this->name));
            $this->res=array();
            $this->list=DB::table('registrations')->where('last_name', 'like', '%'.$this->name )->orWhere('last_name', 'like', $this->name .'%' )->get()->toArray();
            foreach($this->list as $lis){
                $this->res [] = $lis->psa_id . ' - ' . $lis->last_name . ', ' . $lis->first_name;
            }
        // dd($this->res);
        }
        $cntTopic = DB::table('pbld')
        ->select('topic', DB::raw('COUNT(*) as total'))
        ->groupBy('topic')
        ->get();

        foreach ($cntTopic as $row) {
            if ($row->total == 11) {
                DB::table('pbld_sessions')
                ->where('topic', $row->topic)
                ->update(['status' => 'disabled']);
            }
        }

        // dd($cntTopic->toArray()); ASD
        // $wrk = DB::table('workshop as w')
        // ->leftJoin('workshop_reg as wr', 'w.workshop', '=', 'wr.workshop')
        // ->select('w.id', 'w.workshop', 'w.status', DB::raw('COUNT(wr.id) as total'))
        // ->groupBy('w.id', 'w.workshop', 'w.status')
        // ->get();

        $day_2 = DB::table('pbld_sessions as pbld')
        ->leftJoin('pbld as pbr', 'pbld.topic', '=', 'pbr.topic')
        ->select('pbld.topic', 'pbld.speaker', 'pbld.id', 'pbld.status', DB::raw('COUNT(pbr.topic) as total'))
        ->where('count', 2)
        ->groupBy('pbld.topic', 'pbld.speaker', 'pbld.id', 'pbld.status')
        ->get();

        // dd($day_2);


        $day_3 = DB::table('pbld_sessions as pbld')
        ->leftJoin('pbld as pbr', 'pbld.topic', '=', 'pbr.topic')
        ->select('pbld.topic', 'pbld.speaker', 'pbld.id', 'pbld.status', DB::raw('COUNT(pbr.topic) as total'))
        ->where('count', 3)
        ->groupBy('pbld.topic', 'pbld.speaker', 'pbld.id', 'pbld.status')
        ->get();

    
        if(strlen($this->PSAid) > 3){
            $this->cleanvars();
            if (DB::table('registrations')->where('psa_id', $this->PSAid)->exists()) {
                $this->last_name=DB::table('registrations')->where('psa_id', $this->PSAid)->value('last_name');
                $this->first_name=DB::table('registrations')->where('psa_id', $this->PSAid)->value('first_name');
                $this->middle_initial=DB::table('registrations')->where('psa_id', $this->PSAid)->value('middle_name');
                $this->email=DB::table('registrations')->where('psa_id', $this->PSAid)->value('email');
                $this->contactNumber=DB::table('registrations')->where('psa_id', $this->PSAid)->value('contact_number');
                $this->hospitalName=DB::table('registrations')->where('psa_id', $this->PSAid)->value('hospital_name');
                $this->hospitalAddress=DB::table('registrations')->where('psa_id', $this->PSAid)->value('hospital_address');
                
                $this->showButton = true;
            } else {
                
                $this->cleanvars();
                    // actually, hindi lang dapat siya registered, dapat approved rin siya. but, hindi pa makapag approve ngayon kasi hindi pa settled yung QR code.
                session()->flash('status', 'danger');
                session()->flash('message', 'Please register first on our ACA website before you can register for the PBLD sessions.');
                $this->showButton = false;     
            }
        }
        else{
           $this->cleanvars(); 
           $this->showButton = false;
        }
        
        return view('livewire.pbld-reg', compact('day_2', 'day_3'));
    }
    public function cleanvars(){
        $this->last_name="";
        $this->first_name="";
        $this->middle_initial="";
        $this->email="";
        $this->contactNumber="";
        $this->prcNumber="";
        $this->topic="";
    }

    public function submit(){
        if (empty($this->topic)) {
            session()->flash('status', 'danger');
            session()->flash('message', 'Please choose a topic. If all topics are grayed out, it means all sessions are full.' );
        }

        else if (DB::table(table: 'pbld')->where('psa_id', $this->PSAid)->exists()) {
            
            $this->topic=DB::table('pbld')->where('psa_id', $this->PSAid)->value('topic');

            session()->flash('status', 'success');
            session()->flash('message', 'You are already registered for one of the PBLD sessions. ' . "(" . $this->topic . ")" );
        } 
        else 
        {
            // dd("submitted!");
            DB::table('pbld')->insert([
                'psa_id' => $this->PSAid,
                'topic' => $this->topic,

                'created_at' => Carbon::now(),  // Use Carbon to get the current timestamp
                'updated_at' => Carbon::now(),  // Same for updated_at
            ]);
            
            session()->flash('status', 'success');
            session()->flash('message', "You have successfully registered for the PBLD session, '" . $this->topic . "', " . ' Dr. '. $this->first_name ." " . $this->last_name);

            Mail::mailer('smtp')->to('pcrstorage09@gmail.com')->send(new \App\Mail\PbldReg($this->last_name, $this->topic));
            
            // return redirect()->route('reg')->with('success', "You have successfully registered for the PBLD session, '" . $this->day2 . "', " . ' Dr. '. $this->first_name ." " . $this->last_name);
        }
    }
}

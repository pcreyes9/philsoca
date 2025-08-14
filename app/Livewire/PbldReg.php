<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PbldReg extends Component
{
    // ADD TABLE IN DATABASE: pbld, pbld_sessions

    public $PSAid=null, $first_name, $middle_initial, $last_name;
    public $email, $contactNumber, $prcNumber, $topic;
    public $message, $showMessage="enabled", $showButton = false;
    public function render()
    {
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

        // dd($cntTopic->toArray());
        $day_2 = DB::table('pbld_sessions')->where('count', 2)->get();
        $day_3=DB::table('pbld_sessions')->where('count', 3)->get();

    
        if(strlen($this->PSAid) == 4){
            $this->cleanvars();
            if (DB::table('registrations')->where('psa_id', $this->PSAid)->exists()) {
                $this->last_name=DB::table('registrations')->where('psa_id', $this->PSAid)->value('last_name');
                $this->first_name=DB::table('registrations')->where('psa_id', $this->PSAid)->value('first_name');
                $this->middle_initial=DB::table('registrations')->where('psa_id', $this->PSAid)->value('middle_name');
                $this->email=DB::table('registrations')->where('psa_id', $this->PSAid)->value('email');
                $this->contactNumber=DB::table('registrations')->where('psa_id', $this->PSAid)->value('contact_number');
                
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
            

            // return redirect()->route('reg')->with('success', "You have successfully registered for the PBLD session, '" . $this->day2 . "', " . ' Dr. '. $this->first_name ." " . $this->last_name);
        }
    }
}

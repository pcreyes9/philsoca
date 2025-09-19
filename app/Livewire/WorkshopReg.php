<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WorkshopReg extends Component
{

    public $workshop, $station, $name, $show, $res;

    public $PSAid=null, $first_name, $middle_initial, $last_name, $hospitalName, $hospitalAddress;
    public $email, $contactNumber, $prcNumber;

    public $message, $showMessage="enabled", $showButton = true, $showInput = false;

    public $cntAir, $cntRA, $cntPoc;

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

        $this->station = '';

        $this->cntPoc = DB::table('workshop_reg')
        ->where('workshop', 'POCUS WORKSHOP')
        ->count();

        $this->cntAir = DB::table('workshop_reg')
        ->where('workshop', 'POCUS WORKSHOP')
        ->count();

        $this->cntPoc = DB::table('workshop_reg')
        ->where('workshop', 'POCUS WORKSHOP')
        ->count();

        $cntTopic = DB::table('workshop_reg')
        ->select('workshop', DB::raw('COUNT(*) as total'))
        ->groupBy('workshop')
        ->get();

        // dd($cntTopic);

        foreach ($cntTopic as $row) {
            if ($row->total == 40 && $row->workshop == 'POCUS WORKSHOP') {
                DB::table('workshop')
                ->where('workshop', $row->workshop)
                ->update(['status' => 'disabled']);
            }
            else if ($row->total == 48) {
                if($row->workshop == 'AIRWAY WORKSHOP'){
                    DB::table('workshop')
                    ->where('workshop', $row->workshop)
                    ->update(['status' => 'disabled']);
                }
            }
            else if ($row->total == 42) {
                if( $row->workshop == 'REGIONAL ANESTHESIA WORKSHOP'){
                    DB::table('workshop')
                    ->where('workshop', $row->workshop)
                    ->update(['status' => 'disabled']);
                }
            }
        }

        // dd($cntTopic->toArray());
        // $wrk = DB::table('workshop')->get();

        $wrk = DB::table('workshop as w')
        ->leftJoin('workshop_reg as wr', 'w.workshop', '=', 'wr.workshop')
        ->select('w.id', 'w.workshop', 'w.status', DB::raw('COUNT(wr.id) as total'))
        ->groupBy('w.id', 'w.workshop', 'w.status')
        ->get();

        // dd($wrk);ASD

        $stations = DB::table('stations')->where('workshop_name', $this->workshop)->get();
        // $day_3=DB::table('pbld_sessions')->where('count', 3)->get();

    
        if(strlen($this->PSAid) > 3){ 
        
            // $this->cleanvars();
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
                session()->flash('message', 'Please register first on our ACA website before you can register for the WORKSHOPS.');
                $this->showButton = false;     
            }
        }
        else{
        //    $this->cleanvars(); 
           $this->showButton = false;
        }

        return view('livewire.workshop-reg', compact('wrk', 'stations'));
    }

    public function cleanvars(){
        $this->PSAid="";
        $this->last_name="";
        $this->first_name="";
        $this->middle_initial="";
        $this->hospitalName="";
        $this->hospitalAddress="";
        $this->email="";
        $this->contactNumber="";
        $this->prcNumber="";
        $this->workshop="";
        $this->station="";
    }

    public function submit(){
        //  dd($this->workshop, $this->station);
        if (DB::table(table: 'workshop_reg')->where('psa_id', $this->PSAid)->where('workshop', $this->workshop)->exists()) {
    
            session()->flash('status', 'warning');
            session()->flash('message', 'You are already registered for this workshop ' . "(" . $this->workshop. ').');
            $this->workshop="";
        } 
        else if (empty($this->workshop)){

            session()->flash('status', 'danger');
            session()->flash('message', 'Please choose a workshop. If all stations are grayed out, all workshops are already full.' );
        }
        else 
        {
            // dd($this->station);
            // dd("submitted!");
            DB::table('workshop_reg')->insert([
                'psa_id' => $this->PSAid,
                'workshop' => $this->workshop,
                'station' => null,
                'prc_id' => $this->prcNumber,

                'created_at' => Carbon::now(),  // Use Carbon to get the current timestamp
                'updated_at' => Carbon::now(),  // Same for updated_at
            ]);
            
            session()->flash('status', 'success');
            session()->flash('message', "You have successfully registered, '" . $this->workshop ."', " . ' Dr. '. $this->first_name ." " . $this->last_name);
            Mail::mailer('smtp')->to('pcrstorage09@gmail.com')->send(new \App\Mail\WorkshopReg($this->last_name, $this->workshop, $this->station));

            $this->cleanvars();

            // return redirect()->route('reg')->with('success', "You have successfully registered for the PBLD session, '" . $this->day2 . "', " . ' Dr. '. $this->first_name ." " . $this->last_name);
        }
    }
}
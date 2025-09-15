<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WorkshopReg extends Component
{

    public $workshop, $station;

    public $PSAid=null, $first_name, $middle_initial, $last_name;
    public $email, $contactNumber, $prcNumber;

    public $message, $showMessage="enabled", $showButton = false, $showInput = false;
    public function render()
    {
         $this->station = '';

        $cntTopic = DB::table('workshop_reg')
        ->select('workshop', DB::raw('COUNT(*) as total'))
        ->groupBy('workshop')
        ->get();

        $cntStations = DB::table('workshop_reg')
        ->select('station', DB::raw('COUNT(*) as total'))
        ->groupBy('station')
        ->get();

        // dd($cntTopic);

        foreach ($cntTopic as $row) {
            if ($row->total == 40 && $row->workshop == 'POCUS WORKSHOP') {
                DB::table('workshop')
                ->where('workshop', $row->workshop)
                ->update(['status' => 'disabled']);
            }
            else if ($row->total == 42) {
                if($row->workshop == 'AIRWAY WORKSHOP' || $row->workshop == 'REGIONAL ANESTHESIA WORKSHOP'){
                    DB::table('workshop')
                    ->where('workshop', $row->workshop)
                    ->update(['status' => 'disabled']);
                }
            }
        }

        foreach ($cntStations as $row) {
            if ($row->total == 6) {
                DB::table('stations')
                ->where('name', $row->station)
                ->update(['status' => 'disabled']);
            }
        }


        // dd($cntTopic->toArray());
        $wrk = DB::table('workshop')->get();
        $stations = DB::table('stations')->where('workshop_name', $this->workshop)->get();
        // $day_3=DB::table('pbld_sessions')->where('count', 3)->get();

    
        if(strlen($this->PSAid) == 4){
        
            // $this->cleanvars();
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
        $this->email="";
        $this->contactNumber="";
        $this->prcNumber="";
        $this->workshop="";
        $this->station="";
    }

    public function submit(){
        //  dd($this->workshop, $this->station);
        if (DB::table(table: 'workshop_reg')->where('psa_id', $this->PSAid)->exists()) {
            
            // $this->workshop=DB::table('pbld')->where('psa_id', $this->PSAid)->value('workshop');

            session()->flash('status', 'success');
            session()->flash('message', 'You are already registered for one of the WORKSHOPS. ' . "(" . $this->workshop=DB::table('workshop_reg')->where('psa_id', $this->PSAid)->value('workshop') .': '. $this->workshop=DB::table('workshop_reg')->where('psa_id', $this->PSAid)->value('station') . ")" );
        } 
        else if (empty($this->workshop)){
            session()->flash('status', 'danger');
            session()->flash('message', 'Please choose a workshop. If all stations are grayed out, all workshops are already full.' );
        }
        else if ($this->workshop == 'AIRWAY WORKSHOP' && empty($this->station)) {
            // dd(" empty");
            session()->flash('status', 'danger');
            session()->flash('message', 'Please choose a station. If all stations are grayed out, choose other station.' );
        }
        else 
        {
            // dd($this->station);
            // dd("submitted!");
            DB::table('workshop_reg')->insert([
                'psa_id' => $this->PSAid,
                'workshop' => $this->workshop,
                'station' => $this->station,
                'prc_id' => $this->prcNumber,

                'created_at' => Carbon::now(),  // Use Carbon to get the current timestamp
                'updated_at' => Carbon::now(),  // Same for updated_at
            ]);
            
            session()->flash('status', 'success');
            session()->flash('message', "You have successfully registered, '" . $this->workshop .': '. $this->station ."', " . ' Dr. '. $this->first_name ." " . $this->last_name);
            Mail::mailer('smtp')->to('pcrstorage09@gmail.com')->send(new \App\Mail\WorkshopReg($this->last_name, $this->workshop, $this->station));

            $this->cleanvars();

            // return redirect()->route('reg')->with('success', "You have successfully registered for the PBLD session, '" . $this->day2 . "', " . ' Dr. '. $this->first_name ." " . $this->last_name);
        }
    }
}
<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PbldReg extends Component
{
    public $PSAid=null, $first_name, $middle_initial, $last_name;
    public $email, $contactNumber, $day2;
    public $message, $showMessage = false, $showButton = false;
    public function render()
    {

        if(strlen($this->PSAid) == 4){
            $this->cleanvars();
            if (DB::table('registrations')->where('psa_id', $this->PSAid)->exists()) {
                $this->last_name=DB::table('registrations')->where('psa_id', $this->PSAid)->value('last_name');
                $this->first_name=DB::table('registrations')->where('psa_id', $this->PSAid)->value('first_name');
                $this->middle_initial=DB::table('registrations')->where('psa_id', $this->PSAid)->value('middle_name');
                $this->email=DB::table('registrations')->where('psa_id', $this->PSAid)->value('email');
                $this->contactNumber=DB::table('registrations')->where('psa_id', $this->PSAid)->value('contact_number');
                
                $this->message  = "REGISTERED";
                $this->showButton = true;
            } else {
                
                $this->cleanvars();
                    // actually, hindi lang dapat siya registered, dapat approved rin siya. but, hindi pa makapag approve ngayon kasi hindi pa settled yung QR code.
                session()->flash('status', 'danger');
                session()->flash('message', 'Register first in our ACA Website before you can register in PBLD Sessions.');
                // $this->message  = "Register first in our ACA Website before you can register in PBLD Sessions";
                // $this->showMessage = true;
                $this->showButton = false;
                
            }
        }
        else{
           $this->cleanvars(); 
           $this->showButton = false;
        }


        return view('livewire.pbld-reg');
    }
    public function cleanvars(){
        $this->last_name="";
        $this->first_name="";
        $this->middle_initial="";
        $this->email="";
        $this->contactNumber="";
    }

    public function submit(){
        // dd($this->day2);
        DB::table('pbld')->insert([
            'psa_id' => $this->PSAid,
            'topic' => $this->day2,

            'created_at' => Carbon::now(),  // Use Carbon to get the current timestamp
            'updated_at' => Carbon::now(),  // Same for updated_at
        ]);
        session()->flash('status', 'success');
        session()->flash('message', 'You have succesfully registered to PLDB Session ' . $this->day2 . ',' . ' DR '. $this->last_name );
    }
}

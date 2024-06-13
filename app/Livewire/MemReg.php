<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use Livewire\WithFileUploads;

class MemReg extends Component
{
    public $PSAid="";
    public $last_name;
    public $first_name;
    public $memType;
    public $senior;
    public $gender, $contactNumber, $email, $hospitalName, $hospitalAddress, $middle_initial, $paymentProof;
    
    public function render()
    {
        $this->last_name=Members::where('PSA_ID', $this->PSAid)->value('LAST_NAME');
        $this->first_name=Members::where('PSA_ID', $this->PSAid)->value('FIRST_NAME');
        if($this->PSAid == ""){
            $this->last_name=Members::where('PSA_ID', $this->PSAid)->value('LAST_NAME');
            $this->first_name=Members::where('PSA_ID', $this->PSAid)->value('FIRST_NAME');
        }
        return view('livewire.mem-reg');
    }
    public function submit (){
        // dd($this->PSAid, $this->last_name, $this->first_name, $this->middle_initial, $this->memType, $this->senior, $this->gender, $this->contactNumber, $this->email, $this->hospitalName, $this->hospitalAddress,);
        $this->validate([
            'paymentProof' => 'image|max:5000240', // 500MB Max
        ]);

        $this->paymentProof->store('photos');

        session()->flash('message', 'File successfully uploaded.');
    }

}

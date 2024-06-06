<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;

class IDConfirmation extends Component
{
    public $PSAid="";
    public $last_name;
    public $first_name;

    public function search(){
        $this->last_name=Members::where('PSA_ID', $this->PSAid)->value('LAST_NAME');
        $this->first_name=Members::where('PSA_ID', $this->PSAid)->value('FIRST_NAME');
        $this->PSAid=Members::where('PSA_ID', $this->PSAid)->value('PSA_ID');
        //dd($this->name);
    }
    
    public function render()
    {
        $this->last_name=Members::where('PSA_ID', $this->PSAid)->value('LAST_NAME');
        $this->first_name=Members::where('PSA_ID', $this->PSAid)->value('FIRST_NAME');
        if($this->PSAid == ""){
            $this->last_name=Members::where('PSA_ID', $this->PSAid)->value('LAST_NAME');
            $this->first_name=Members::where('PSA_ID', $this->PSAid)->value('FIRST_NAME');
        }
        return view('livewire.i-d-confirmation');
    }
}

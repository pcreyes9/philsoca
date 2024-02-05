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
        $this->last_name=Members::where('id', $this->PSAid)->value('last_name');
        $this->first_name=Members::where('id', $this->PSAid)->value('first_name');

        //dd($this->name);
    }
    public function render()
    {
        $this->last_name=Members::where('id', $this->PSAid)->value('last_name');
        $this->first_name=Members::where('id', $this->PSAid)->value('first_name');
        if($this->PSAid == ""){
            $this->last_name=Members::where('id', $this->PSAid)->value('last_name');
            $this->first_name=Members::where('id', $this->PSAid)->value('first_name');
        }
        return view('livewire.i-d-confirmation');
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SpeakerPic extends Component
{
    public $nameModal, $bioModal;

    public function modalShow ($name){
        // dd($name);
        $this->nameModal = $name;
        $this->bioModal = User::where('name', $name)->value('bio');


    }
    public function render()
    {
        $speaker = User::where('userType', 'speaker')->get();
        // dd($speaker->toArray());
        return view('livewire.speaker-pic', ['speaker' => $speaker]);
    }
}

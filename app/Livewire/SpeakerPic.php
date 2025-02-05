<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SpeakerPic extends Component
{
    public $nameModal;

    public function modalShow ($name){
            // dd($name);
        $this->nameModal = $name;

    }
    public function render()
    {
        $speaker = User::where('userType', 'Speaker')->get();
        // dd($speaker->toArray());
        return view('livewire.speaker-pic', ['speaker' => $speaker]);
    }
}

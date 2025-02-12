<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SpeakerPic extends Component
{
    public $nameModal, $bioModal, $affiModal, $countryModal, $photoModal;

    public function modalShow ($name){
        // dd($name);
        $this->nameModal = $name;
        $this->bioModal = User::where('name', $name)->value('bio');
        $this->affiModal = User::where('name', $name)->value('affiliation');
        $this->countryModal = User::where('name', $name)->value('country');
        $this->photoModal = User::where('name', $name)->value('photo');


    }
    public function render()
    {
        $speaker = User::where('userType', 'speaker')->orderBy('name')->get();
        // dd($speaker->toArray());
        return view('livewire.speaker-pic', ['speaker' => $speaker]);
    }
}

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
        // $results = User::selectRaw('SUBSTRING_INDEX(name, " ", -1) as last_word')->get();
        // dd($results->toArray());
        $speaker = User::where('userType', 'speaker')->orderBy('profile_photo_path', 'ASC')->orderByRaw('SUBSTRING_INDEX(name, " ", -1) ASC')->get();
        // dd($speaker->toArray());
        return view('livewire.speaker-pic', ['speaker' => $speaker]);
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SpeakerPic extends Component
{
    public $nameModal, $bioModal, $affiModal, $countryModal, $photoModal, $schedule = [];

    public function modalShow ($name, $id){
        // dd($id);
        $this->nameModal = $name;
        $this->speakerID = $id;
        $this->bioModal = User::where('name', $name)->value('bio');
        $this->affiModal = User::where('name', $name)->value('affiliation');
        $this->countryModal = User::where('name', $name)->value('country');
        $this->photoModal = User::where('name', $name)->value('photo');
        $this->schedule = DB::table('speakers_schedule')->where('speaker_id', $id)->get();
        // dd($this->schedule->toArray());
        
    }
    public function render()
    {
        // $results = User::selectRaw('SUBSTRING_INDEX(name, " ", -1) as last_word')->get();
        // dd($results->toArray());
        $speaker = User::where('userType', 'speaker')->orderBy('profile_photo_path')->orderByRaw('SUBSTRING_INDEX(name, " ", -1) ASC')->get();
        $schedule = DB::table('speakers_schedule')->get();
        // dd($schedule->toArray());
        return view('livewire.speaker-pic', ['speaker' => $speaker]);
    }
}
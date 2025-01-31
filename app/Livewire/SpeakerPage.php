<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class SpeakerPage extends Component
{
    use WithFileUploads;
    
    public $name, $country, $email, $affiliation, $bio, $ext;
    public $status = "", $opacity = "", $hide = "";
    public $words;
    public  $photo, $photoName, $photoDisplay;

    public function mount()
    {
        $this->status = "readonly";
        $this->opacity = "0.0";
        $this->hide = "hidden";

        $this->name = Auth()->user()->name;
        $this->email = Auth()->user()->email;
        $this->country = Auth()->user()->country;
        $this->affiliation = Auth()->user()->affiliation;

        $this->bio = Auth()->user()->bio;
        $this->photoDisplay = Auth()->user()->photo;

    }
    
    public function index (){
        if(Auth::id()){
            $userType = Auth()->user()->userType;
            
            if($userType == 'admin'){
                return view('user_account.viewMemReg');
            }
            else if($userType == 'speaker'){
                // $this->name = Auth()->user()->name;
                // $this->email = Auth()->user()->email;
                // $this->country = Auth()->user()->country;
                // $this->affiliation = Auth()->user()->email;
                return view('home.speakers.speakerPage');
            }
            else{
                return view('home/landing');
            }
        }
        else{
            return view('auth/login');
        }
    }

    public function modify(){
        // dd("asd");

        if($this->status == "readonly"){
            $this->status = "";
            $this->opacity = "0.5";
            $this->hide = "";
        }
        else{
            $this->name = Auth()->user()->name;
            $this->email = Auth()->user()->email;
            $this->country = Auth()->user()->country;
            $this->affiliation = Auth()->user()->affiliation;

            $this->bio = Auth()->user()->bio;
            $this->photo = Auth()->user()->photo;

            $this->status = "readonly";
            $this->opacity = "0.0";
            $this->hide = "hidden";
        }
    }

    public function photoUpd(){
        // dd("photo update");
    }

    public function update(){
        // dd("asd");
        $this->status = "readonly";
        $this->opacity = "0.0";

        // dd($this->photo);

        if($this->photo != null){
            $ext = $this->photo->extension();
        
            $photoName = $this->name . ' '.$this->country . '.' . $this->photo->extension();
            $this->photo->storeAs('photos/speakersIMG', $photoName);
            User::where('id', Auth()->user()->id)->update([
                'photo' => $photoName
            ]);
            return redirect(request()->header('Referer'));

        }

        

        // dd(Auth()->user()->id);
        User::where('id', Auth()->user()->id)->update([
            'name' => $this->name,
            'country' => $this->country,
            'email' => $this->email,
            'affiliation' => $this->affiliation,
            'bio' => $this->bio,
            // 'photo' => $photoName
        ]);
        return redirect(request()->header('Referer'));
    }


    public function render()
    {
        $this->words = Str::of($this->bio )->wordCount();

        return view('livewire.speaker-page');
    }
}

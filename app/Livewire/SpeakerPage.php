<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SpeakerPage extends Component
{
    use WithFileUploads;
    
    public $name, $country, $email, $affiliation, $bio, $ext, $phone, $hospiAddress, $affi;
    public $status = "", $opacity = "", $hide = "";
    public $words;
    public  $photo, $photoName, $photoDisplay, $show, $updHide;

    public function mount()
    {
        $this->status = "readonly";
        $this->opacity = "0.0";
        $this->hide = "hidden";

        $this->name = Auth()->user()->name;
        $this->email = Auth()->user()->email;
        $this->phone = Auth()->user()->contact_number;
        $this->country = Auth()->user()->country;
        $this->affiliation = Auth()->user()->affiliation;
        $this->hospiAddress = Auth()->user()->hospiAddress;

        $this->bio = Auth()->user()->bio;
        $this->affi = Auth()->user()->affiliation;
        $this->country = Auth()->user()->country;


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
            else if($userType == 'abstract'){
                return view('user_account.abstractPortal');
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
        
        // dd($date);
        // dd("asd");

        if($this->status == "readonly"){
            $this->status = "";
            $this->opacity = "0.5";
            $this->hide = "";
            $this->updHide = "hidden";
        }
        else{
            $this->name = Auth()->user()->name;
            $this->email = Auth()->user()->email;
            $this->phone = Auth()->user()->contact_number;
            $this->country = Auth()->user()->country;
            $this->affiliation = Auth()->user()->affiliation;
            $this->hospiAddress = Auth()->user()->hospiAddress;

            $this->bio = Auth()->user()->bio;
            $this->photo = Auth()->user()->photo;

            $this->status = "readonly";
            $this->opacity = "0.0";
            $this->hide = "hidden";
            $this->updHide = "";
        }
    }

    public function moveFile($move){
        $currentPath = 'public/storage/photos/speakersIMG/' . $move;
        $newPath = 'public/storage/' . $move;
        dd(Storage::exists($currentPath));
        if (Storage::exists($currentPath)) {
            Storage::move($currentPath, $newPath);
            dd("moved");
        }
    }

    public function update(){

        // dd("asd");
        $this->status = "readonly";
        $this->opacity = "0.0";

        // dd($this->photo);

        if($this->photo != null){
            $ext = $this->photo->extension();
            $photoName = $this->name . ' '.$this->country .' ' . Carbon::now()->format('mdy') . '.' . $this->photo->extension();
            $this->photo->storeAs('/', $photoName);            
            
            // $path = Storage::put('public/storage/'.  $photoName, $this->photo);
            // Storage::put($path, $this->photo);
        
            User::where('id', Auth()->user()->id)->update([
                'name' => $this->name,
                'country' => $this->country,
                'email' => $this->email,
                'contact_number' => $this->phone,
                'affiliation' => $this->affiliation,
                'hospiAddress' => $this->hospiAddress,
                'bio' => $this->bio,
                'photo' => $photoName
            ]);

            // $this->moveFile($photoName);
            return redirect(request()->header('Referer'));

        }
        else{
            // dd(Auth()->user()->id);
            User::where('id', Auth()->user()->id)->update([
                'name' => $this->name,
                'country' => $this->country,
                'email' => $this->email,
                'contact_number' => $this->phone,
                'affiliation' => $this->affiliation,
                'hospiAddress' => $this->hospiAddress,
                'bio' => $this->bio,
                // 'photo' => $photoName
            ]);
            return redirect(request()->header('Referer'));
        }
    }


    public function render()
    {
        if($this->country == ""){
            $this->status = "";
            $this->opacity = "0.5";
            $this->hide = "";
            $this->updHide = "hidden";

        }

        $this->bio = Str::words($this->bio, 270, '');
        $this->words = Str::of($this->bio )->wordCount();

        return view('livewire.speaker-page');
    }
}

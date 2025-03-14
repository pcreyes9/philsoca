<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\AbstractSubmission;
use Illuminate\Support\Facades\Mail;

class RegAbstract extends Component
{
    use WithFileUploads;

    public $title, $author, $country, $hospital, $email, $contact, $category, $fileName, $file;

    public function submit(){
        // dd($this->file);
        if($this->category == "resident"){
            $fileName = strtoupper($this->country) .' - '. $this->title. '.' . $this->file->extension();
            $this->file->storeAs('abstract/Resident', $fileName);
        }
        else if($this->category == "fellow"){
            // dd($this->file);
            $fileName = strtoupper($this->country) .' - '. $this->title. '.' . $this->file->extension();
            
            $this->file->storeAs('abstract/Fellow', $fileName);
        }
        // dd($fileName);
        DB::table('abstract')->insert([
            'title' => strtoupper($this->title),
            'author' => ucwords($this->author),
            'country' => strtoupper($this->country),
            'hospital' => ucwords($this->hospital),
            'email' => $this->email,
            'contact' => $this->contact,
            'fileName' => $fileName,
            'category' => ucwords($this->category),
            'status' => '1',

            'created_at' => Carbon::now(),  // Use Carbon to get the current timestamp
            'updated_at' => Carbon::now(),  // Same for updated_at
        ]);
 
        Mail::mailer('info')->to($this->email)->send(new AbstractSubmission($this->author));
        return redirect()->route('abstract')->with('success', 'You just have submitted your abstract, Dr. ' . $this->author . '. We will update you in this email, ' . $this->email . '. Thank you and we hope to see you soon!');
    }

    public function render()
    {
        return view('livewire.reg-abstract');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Contracts\View\View;

use Illuminate\Support\Facades\Auth;

class SpeakerController extends Controller
{
    public function index(){
        // dd("speaker controller index");
        if(Auth::id()){
            $userType = Auth()->user()->userType;

            if($userType == 'admin'){
                return view('user_account.viewMemReg');
            }
            else if($userType == 'speaker'){
                // dd("speaker");
                return view('home.speakers.speakerPage');
            }
            else if($userType == 'abstract'){
                // dd("speaker");
                return view('home.speakers.speakerPage');
            }
            else{
                return view('home/landing');
            }
        }
        else{
            return view('home/landing');
        }
        // return view('home.speakers.register');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public $day, $title;

    public function mount($day)
    {
        $this->day = $day; // Capture the day from the URL

        if($day == 'day1'){
            $this->title = "Day 1";
        } elseif($day == 'day2'){
            $this->title = "Day 2";
        } elseif($day == 'day3'){
            $this->title = "Day 3";
        }

        return $this->show();
    }

    public function show(){
        // dd("gallery");
        $arrOpening = [];
        $arrReg = [];
        $arrAsean = [];

        $opening = File::allFiles(public_path('images/gallery/day1/opening ceremony'));
        $reg = File::allFiles(public_path('images/gallery/day1/registration'));
        $asean = File::allFiles(public_path('images/gallery/day1/asean night'));

        // $opening = File::allFiles(public_path('images/gallery/' . $this->day . '/opening ceremony'));
        // $reg = File::allFiles(public_path('images/gallery/' . $this->day . '/registration'));
        // $asean = File::allFiles(public_path('images/gallery/' . $this->day . '/asean night'));

        foreach($opening as $file) {
            array_push($arrOpening, pathinfo($file)['filename']);
        }

        foreach($reg as $file) {
            array_push($arrReg, pathinfo($file)['filename']);
        }
        foreach($asean as $file) {
            array_push($arrAsean, pathinfo($file)['filename']);
        }
        // dd(array("arrOpening"=>$arrOpening, "arrReg"=>$arrReg, "arrAsean"=>$arrAsean), $this->title);

        return view("home.gallery.display", array("arrOpening"=>$arrOpening, "arrReg"=>$arrReg, "arrAsean"=>$arrAsean), 
        ["title" => $this->title]);
    }
}
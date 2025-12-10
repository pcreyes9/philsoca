<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public $day, $title;

    public function show($day){
        // dd("gallery");
        $this->day = $day;

        if($day == 'day1')
            { $this->title = "Gallery - Day 1"; } 
        elseif($day == 'day2')
            { $this->title = "Gallery - Day 2"; } 
        elseif($day == 'day3')
            { $this->title = "Gallery - Day 3"; }
        $arrOpening = [];
        $arrReg = [];
        $arrAsean = [];

        // $opening = File::allFiles(public_path('images/gallery/day1/opening_ceremony'));
        // $reg = File::allFiles(public_path('images/gallery/day1/registration'));
        // $asean = File::allFiles(public_path('images/gallery/day1/asean_night'));

        $opening = File::allFiles(public_path('images/gallery/' . $this->day . '/opening_ceremony'));
        $reg = File::allFiles(public_path('images/gallery/' . $this->day . '/registration'));
        $asean = File::allFiles(public_path('images/gallery/' . $this->day . '/asean_night'));

        foreach ($opening as $file) {
            $arrOpening[] = pathinfo($file)['basename']; // filename + extension
        }

        foreach ($reg as $file) {
            $arrReg[] = pathinfo($file)['basename']; // filename + extension
        }

        foreach ($asean as $file) {
            $arrAsean[] = pathinfo($file)['basename']; // filename + extension
        }

        // dd(array("arrOpening"=>$arrOpening, "arrReg"=>$arrReg, "arrAsean"=>$arrAsean), $this->title);

        return view("home.gallery.display", array("arrOpening"=>$arrOpening, "arrReg"=>$arrReg, "arrAsean"=>$arrAsean), 
        ["title" => $this->title]);
    }
}
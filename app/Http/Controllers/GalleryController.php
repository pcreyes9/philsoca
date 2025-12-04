<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show(){
        // dd("gallery");
        $arrOpening = [];
        $arrReg = [];
        $arrAsean = [];
        $opening = File::allFiles(public_path('images/gallery/day 1/opening ceremony'));
        $reg = File::allFiles(public_path('images/gallery/day 1/registration'));
        $asean = File::allFiles(public_path('images/gallery/day 1/asean night'));


        foreach($opening as $file) {
            array_push($arrOpening, pathinfo($file)['filename']);
        }

        foreach($reg as $file) {
            array_push($arrReg, pathinfo($file)['filename']);
        }
        foreach($asean as $file) {
            array_push($arrAsean, pathinfo($file)['filename']);
        }
        // dd($arrReg);

        return view("home.gallery.display", array("arrOpening"=>$arrOpening, "arrReg"=>$arrReg, "arrAsean"=>$arrAsean));
    }
}

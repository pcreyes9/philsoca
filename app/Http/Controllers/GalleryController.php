<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show(){
        $pics = [];
        $path = public_path('images/convention');
        $files = \File::allFiles($path);

        foreach($files as $file) {
            array_push($pics, pathinfo($file)['filename']);
        }
        // dd($pics);
        return view("home.gallery.midyear", array("pics"=>$pics));
    }

    
}

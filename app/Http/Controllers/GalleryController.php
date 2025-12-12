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

        // Set the title
        if ($day == 'day1') {
            $this->title = "Gallery - Day 1"; 
        } elseif ($day == 'day2') {
            $this->title = "Gallery - Day 2"; 
        } elseif ($day == 'day3') {
            $this->title = "Gallery - Day 3"; 
        }

        // Path to the specific day folder inside aca_2025
        $base = public_path('images/gallery/aca_2025/' . $day);

        // Make sure the folder exists
        if (!is_dir($base)) {
            return view("template.pages.gallery-aca-test", [
                "arrGallery" => [],
                "title" => $this->title
            ]);
        }

        $folders = collect(File::directories($base)); // get subfolders only

        $arrGallery = [];

        foreach ($folders as $folderPath) {
            $subfolderName = basename($folderPath); // e.g., opening_ceremony, asean_night

            // Get all files in this subfolder
            $files = collect(File::files($folderPath))
                ->map(function ($file) use ($base) {
                    // Check if landscape
                    [$width, $height] = getimagesize($file->getPathname());
                    if ($width <= $height) {
                        return null; // skip portrait
                    }

                    // Relative path from public/
                    $relativePath = str_replace(public_path() . DIRECTORY_SEPARATOR, '', $file->getPathname());

                    return [
                        'filename' => $file->getFilename(),
                        'relative_path' => $relativePath
                    ];
                })
                ->filter() // remove portrait images
                ->values()
                ->toArray();

            $arrGallery[$subfolderName] = $files;
        }

        // dd($arrGallery);
        // Return to view
        return view("home.gallery.display", [
            "arrGallery" => $arrGallery,
            "title" => $this->title
        ]);
    }
}
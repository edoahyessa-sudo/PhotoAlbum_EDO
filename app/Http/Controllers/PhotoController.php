<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    // Home page: list of page links
    public function home()
    {
         $pages = [
            1 => 'Animals',
            2 => 'Nature',
            3 => 'Architecture',
            4 => 'People',
            5 => 'Miscellaneous'
         ];
     return view('home', compact('pages'));
    }

    // Show one page of the album
    public function showPage($number)
    {
        $categories = [
            1 => 'Animals',
            2 => 'Nature',
            3 => 'Architecture',
            4 => 'People',
            5 => 'Miscellaneous'
        ]; 
        // Only pages 1-5
        if (!isset($categories[$number])) {
            abort(404);
        }

        // Generate 20 images per page
        $start = ($number - 1) * 20 + 1;
        $end = $start + 19;

        $images = [];
        for ($i = $start; $i <= $end; $i++) {
            $images[] = [
                'file' => "img$i.jpg",
                'title' => "Image $i"
            ];
        }

        $title = "Page $number -  " . $categories[$number];

        return view('pages.page', compact('images', 'title', 'number','categories'));
    }
}

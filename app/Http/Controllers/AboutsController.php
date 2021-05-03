<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutsController extends Controller
{
    //
    public function about(){
        $title = 'About Us Page';
        return view('pages.about')->with('title', $title);
    }
}

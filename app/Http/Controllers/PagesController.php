<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Billboard Properties';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')-> with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Our Services',
            'services' => ['Property Management', 'Property Sales', 'Graphic Design', 'Architectural Drawings']
        );
        return view('pages.services')-> with($data);
    }

    public function contacts(){
        $title = 'Contact Us';
        return view('pages.contacts', compact('title'));
    }
}

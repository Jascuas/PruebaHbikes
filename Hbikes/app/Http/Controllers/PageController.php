<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        return view('pages.home');

    }

    public function gallery(){

        return view('pages.gallery');

    }

    public function about(){

        return view('pages.about');

    }

    public function contact(){

        return view('pages.contact');

    }

    public function store(){

        return view('pages.store');

    }
}

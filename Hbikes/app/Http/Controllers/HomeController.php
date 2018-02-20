<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::where('user_id',auth()->user()->id)->get();
        return view('home',['reviews' => $reviews]);
    }
}

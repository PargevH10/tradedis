<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.contract-description');
    }

    public function portfolio()
    {
        return view('pages.all-your-portfolio');
    }
}

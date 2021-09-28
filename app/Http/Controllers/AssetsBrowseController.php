<?php

namespace App\Http\Controllers;

use App\Models\Symbol;
use Illuminate\Http\Request;

class AssetsBrowseController extends Controller
{
    public function assetsBrowse()
    {
        $symbols = Symbol::get();

        return view('pages.assets-browse', compact('symbols'));
    }
}

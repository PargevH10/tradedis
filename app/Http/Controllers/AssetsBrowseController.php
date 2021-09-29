<?php

namespace App\Http\Controllers;

use App\Models\Symbol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetsBrowseController extends Controller
{
    public function assetsBrowse()
    {
        $daysSymbols = Symbol::select('*', DB::raw('DATE(created_at) as date'))->get()->groupBy('date');

        return view('pages.assets-browse', compact('daysSymbols'));
    }
}

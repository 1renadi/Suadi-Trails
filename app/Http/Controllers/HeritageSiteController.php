<?php

namespace App\Http\Controllers;

use App\Models\HeritageSite;
use Illuminate\Http\Request;

class HeritageSiteController extends Controller
{
    public function index()
    {
        $sites = HeritageSite::all();
            $featuredSites = HeritageSite::where('is_featured', true)->take(3)->get();

        return view('heritage-sites.index', compact('sites' , 'featuredSites'));
    }

    public function show($id)
    {
        $site = HeritageSite::findOrFail($id);
        return view('heritage-sites.show', compact('site'));
    }

}



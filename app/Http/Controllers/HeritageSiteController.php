<?php

namespace App\Http\Controllers;

use App\Models\HeritageSite;
use Illuminate\Http\Request;

class HeritageSiteController extends Controller
{
    public function index()
    {
        $sites = HeritageSite::all();
        return view('heritage-sites.index', compact('sites'));
    }

    public function show($id)
    {
        $site = HeritageSite::findOrFail($id);
        return view('heritage-sites.show', compact('site'));
    }
}




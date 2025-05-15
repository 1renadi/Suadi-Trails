<?php
namespace App\Http\Controllers;

use App\Models\HeritageSite;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredSites = HeritageSite::take(3)->get();
        return view('home', compact('featuredSites'));
    }
}
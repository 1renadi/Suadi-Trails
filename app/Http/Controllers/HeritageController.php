<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeritageSite;
use App\Models\HeritageCategory;

class HeritageController extends Controller
{
    public function index()
    {
        $categories = HeritageCategory::all();
        return view('heritage', compact('categories'));
    }

    public function materialHeritage()
    {
    $landmarks = HeritageSite::where('category', 'material')->get();
        return view('catagoryHeritage.Tangible', compact('landmarks'));
    }

    public function nonmaterial()
    {
        return view('catagoryHeritage.Intangible');
    }

    public function religious()
    {
        return view('catagoryHeritage.Religious');
    }

    public function natural()
    {
        return view('catagoryHeritage.Natural');
    }

    public function maritime()
    {
        return view('catagoryHeritage.Maritime');
    }

    public function clothing()
    {
        return view('catagoryHeritage.Costumes');
    }

    public function folklore()
    {
        return view('catagoryHeritage.Folklore');
    }

    public function show($id)
    {
        $landmark = HeritageSite::findOrFail($id);
        return view('heritage.show', compact('landmark'));
    }


    public function sitesIndex()
{
    $sites = HeritageSite::where('category', 'material')->get();
    return view('heritage-sites.index', compact('sites'));
}
public function showDetail($view)
{
    return view($view);
}

}








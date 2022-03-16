<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class KambingController extends Controller
{
    public function index()
    {

        $menu = Menu::all();
        $category = Menu::all()->pluck('menu_category')->unique();

        return view('kambing')->with(['menu'=>$menu,'category'=>$category]);
    }
}

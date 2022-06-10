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
        $menu_special = Menu::where('special','YES')->get();
        $category = Menu::all()->pluck('menu_category')->unique();

        return view('kambing')->with(['menu'=>$menu,'menu_special'=>$menu_special,'category'=>$category]);
    }
}

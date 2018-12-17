<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function menu()
    {
        $menu = Menu::all();
        return view('backend.menus', compact('menu'));
    }

}

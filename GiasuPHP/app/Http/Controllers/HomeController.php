<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function hocphithamkhao()
    {
        return view('pages.hocphithamkhao');
    }
    public function gioithieu()
    {
        return view('pages.gioithieu');
    }
    public function phuhuynhcanbiet()
    {
       return view('pages.phuhuynhcanbiet');
    }
}

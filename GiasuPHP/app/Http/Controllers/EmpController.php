<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use DB;
use App\Models\SocialiteModel;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
// Thu vien Session
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;

class EmpController extends Controller
{
    public function allpdf()
    {
        $a = DB::table('tbl_all')->get();
        return view('admin.inhoadon')->with(compact('a'));
    }
}

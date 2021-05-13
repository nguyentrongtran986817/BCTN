<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\SocialiteModel;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
// Thu vien Session
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;

session_start();


class DanhsachcanlophocController extends Controller
{
    public function danhsachcanlophoc()
    {
        $all_danhsachcanlophoc = DB::table('tbl_danhsachlophoc')->where('danhsachlophoc_status','0')
            ->join('tbl_themgiasu_monday', 'tbl_danhsachlophoc.danhsachlophoc_monhoc', '=', 'tbl_themgiasu_monday.id')
            ->join('tbl_themgiasu_lopday', 'tbl_danhsachlophoc.danhsachlophoc_lophoc', '=', 'tbl_themgiasu_lopday.id')
            ->join('tbl_themgiasu_thuday', 'tbl_danhsachlophoc.danhsachlophoc_thuhoc', '=', 'tbl_themgiasu_thuday.id')
            ->join('tbl_danhsachgiasu_gender', 'tbl_danhsachlophoc.danhsachlophoc_gioitinh', '=', 'tbl_danhsachgiasu_gender.id')
            ->get();
        $all_lopday = DB::table('tbl_themgiasu_lopday')->get();
        $all_monday = DB::table('tbl_themgiasu_monday')->get();
        $all_thuday = DB::table('tbl_themgiasu_thuday')->get();
        return view('pages.home')->with(compact('all_danhsachcanlophoc', 'all_lopday', 'all_monday','all_thuday'));
    }
}

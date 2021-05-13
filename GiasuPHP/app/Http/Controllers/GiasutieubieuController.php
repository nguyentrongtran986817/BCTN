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

class GiasutieubieuController extends Controller
{
    public function giasutieubieu()
    {
        $all_chitietgiasu = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_hienthi','1') 
            ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
            ->join('tbl_themgiasu_monday', 'tbl_danhsachgiasu.danhsachgiasu_monday', '=', 'tbl_themgiasu_monday.id')
            ->join('tbl_themgiasu_lopday', 'tbl_danhsachgiasu.danhsachgiasu_lopday', '=', 'tbl_themgiasu_lopday.id')
            ->join('tbl_themgiasu_ngayday', 'tbl_danhsachgiasu.danhsachgiasu_ngayday', '=', 'tbl_themgiasu_ngayday.id')

            ->get();
        return view('pages.giasutieubieu')->with(compact('all_chitietgiasu'));
    }
    public function chitietgiasu($id)
    {
        $ctgs = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id',$id)
            ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
            ->join('tbl_themgiasu_monday', 'tbl_danhsachgiasu.danhsachgiasu_monday', '=', 'tbl_themgiasu_monday.id')
            ->join('tbl_themgiasu_lopday', 'tbl_danhsachgiasu.danhsachgiasu_lopday', '=', 'tbl_themgiasu_lopday.id')
            ->join('tbl_themgiasu_ngayday', 'tbl_danhsachgiasu.danhsachgiasu_ngayday', '=', 'tbl_themgiasu_ngayday.id')
            ->first();   
        return view('pages.chitietgiasu')->with(compact('ctgs'));
    }
}
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
use Barryvdh\DomPDF\PDF;

session_start();

class ThanhtoanController extends Controller
{
    public function nhanlop()
    {
        $nhanlop = DB::table('tbl_nhanlop')->get();
        return view('admin.nhanlop')->with(compact('nhanlop'));
    }
    public function update_nhanlop($nhanlop_id)
    {
        $nl = DB::table('tbl_nhanlop')->where('nhanlop_id' ,$nhanlop_id)->update([
            'nhanlop_trangthai' => '1'
        ])
;
        return redirect('/nhanlop');
    }
    public function inhoadon($giasu_id)
    {
        $gs = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $giasu_id)
        ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
        ->first();
        $all_hienla = DB::table('tbl_themgiasu_hienla')->get();
        // dd($all_hienla['1']->hienla_name);die();
        $ihd = DB::table('tbl_nhanlop')->where('giasu_id', $giasu_id)->get();
        // dd((int)$ihd['1']->nhanlop_luong *35/100);die();
        return view('admin.inhoadon')
        ->with(compact('ihd'))
        ->with(compact('gs'))
        ->with(compact('all_hienla'));
    }

    public function downloadPDF($giasu_id)
    {
        $ihd = DB::table('tbl_nhanlop')->where('giasu_id', $giasu_id)->get();
        $pdf = PDF::loadView('admin.inhoadon', compact('ihd'));
        return $pdf->download('inhoadon.pdf');
    }
    public function nhangiasu()
    {
        $nhangs = DB::table('tbl_nhangs')->get();
        return view('admin.nhangiasu')->with(compact('nhangs'));
    }
    public function update_nhangiasu($id)
    {
        $ngs = DB::table('tbl_nhangs')->where('id' ,$id)->update([
            'nhangs_trangthai' => '1'
        ])
;
        return redirect('/nhangiasu');
    }
}
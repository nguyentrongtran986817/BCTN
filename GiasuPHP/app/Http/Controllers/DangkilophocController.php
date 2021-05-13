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

class DangkilophocController extends Controller
{
    public function dangkilophoc()
    {
        $gt = DB::table('tbl_danhsachgiasu_gender')->get();
        $thuhoc = DB::table('tbl_themgiasu_thuday')->get();
        $loaihoc = DB::table('tbl_themgiasu_hienla')->get();
        $monhoc = DB::table('tbl_themgiasu_monday')->get();
        $ngayhoc = DB::table('tbl_themgiasu_ngayday')->get();
        $lophoc = DB::table('tbl_themgiasu_lopday')->get();

        return view('pages.dangkilophoc')
            ->with(compact('gt'))
            ->with(compact('loaihoc'))
            ->with(compact('thuhoc'))
            ->with(compact('monhoc'))
            ->with(compact('ngayhoc'))
            ->with(compact('lophoc'));
    }
    public function save_dangkilophoc(request $request)
    {
        $data = array();
        $data['danhsachlophoc_name'] = $request->danhsachlophoc_name;
        $data['danhsachlophoc_gioitinh'] = $request->danhsachlophoc_gioitinh;
        $data['danhsachlophoc_monhoc'] = implode(',', $request->danhsachlophoc_monhoc);
        $data['danhsachlophoc_lophoc'] = implode(',', $request->danhsachlophoc_lophoc);
        $data['danhsachlophoc_diachi'] = $request->danhsachlophoc_diachi;
        $data['danhsachlophoc_luong'] = $request->danhsachlophoc_luong;
        $data['danhsachlophoc_sobuoi'] = $request->danhsachlophoc_sobuoi;
        $data['danhsachlophoc_thuhoc'] = implode(',', $request->danhsachlophoc_thuhoc);
        $data['danhsachlophoc_thoigian'] = $request->danhsachlophoc_thoigian;
        $data['danhsachlophoc_yeucau'] = $request->danhsachlophoc_yeucau;
        $data['danhsachlophoc_lienhe'] = $request->danhsachlophoc_lienhe;



        DB::table('tbl_danhsachlophoc')->insert($data);
        Session::put('message', 'Thêm lớp học thành công');
        return redirect('/dangkilophoc');
    }
}

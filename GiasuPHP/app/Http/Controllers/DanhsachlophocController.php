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

class DanhsachlophocController extends Controller
{
    public function danhsachlophoc()
    {
        $all_danhsachlophoc = DB::table('tbl_danhsachlophoc')
            ->join('tbl_themgiasu_monday', 'tbl_danhsachlophoc.danhsachlophoc_monhoc', '=', 'tbl_themgiasu_monday.id')
            ->join('tbl_themgiasu_lopday', 'tbl_danhsachlophoc.danhsachlophoc_lophoc', '=', 'tbl_themgiasu_lopday.id')
            ->join('tbl_danhsachgiasu_gender', 'tbl_danhsachlophoc.danhsachlophoc_gioitinh', '=', 'tbl_danhsachgiasu_gender.id')
            ->get();
        $all_lopday = DB::table('tbl_themgiasu_lopday')->get();
        $all_monday = DB::table('tbl_themgiasu_monday')->get();
        return view('admin.danhsachlophoc')->with(compact('all_danhsachlophoc', 'all_lopday', 'all_monday'));
    }
    public function themlophoc()
    {
        // $this->AuthLogin();
        $gt = DB::table('tbl_danhsachgiasu_gender')->get();
        $thuhoc = DB::table('tbl_themgiasu_thuday')->get();
        $loaihoc = DB::table('tbl_themgiasu_hienla')->get();
        $monhoc = DB::table('tbl_themgiasu_monday')->get();
        $ngayhoc = DB::table('tbl_themgiasu_ngayday')->get();
        $lophoc = DB::table('tbl_themgiasu_lopday')->get();

        return view('admin.themlophoc')
            ->with(compact('gt'))
            ->with(compact('loaihoc'))
            ->with(compact('thuhoc'))
            ->with(compact('monhoc'))
            ->with(compact('ngayhoc'))
            ->with(compact('lophoc'));
    }
    public function save_themlophoc(request $request)
    {
        $data = array();
        $data['danhsachlophoc_name'] = $request->danhsachlophoc_name;
        $data['danhsachlophoc_gioitinh'] = $request->danhsachlophoc_gioitinh;
        $data['danhsachlophoc_monhoc'] = implode(',', $request->danhsachlophoc_monhoc);
        $data['danhsachlophoc_lophoc'] = implode(',', $request->danhsachlophoc_lophoc);
        $data['danhsachlophoc_diachi'] = $request->danhsachlophoc_diachi;
        $data['danhsachlophoc_luong'] = $request->danhsachlophoc_luong;
        $data['danhsachlophoc_sobuoi'] =  $request->danhsachlophoc_sobuoi;
        $data['danhsachlophoc_thuhoc'] = implode(',', $request->danhsachlophoc_thuhoc);
        $data['danhsachlophoc_thoigian'] = $request->danhsachlophoc_thoigian;
        $data['danhsachlophoc_yeucau'] = $request->danhsachlophoc_yeucau;
        $data['danhsachlophoc_lienhe'] = $request->danhsachlophoc_lienhe;
        $data['danhsachlophoc_status'] = 0;

        DB::table('tbl_danhsachlophoc')->insert($data);
        Session::put('message', 'Thêm lớp học thành công');
        return redirect('/danhsachlophoc');
    }
    public function chinhsua_danhsachlophoc($danhsachlophoc_id)
    {
        $csdslh = DB::table('tbl_danhsachlophoc')->where('danhsachlophoc_id', $danhsachlophoc_id)->first();
        $gt = DB::table('tbl_danhsachgiasu_gender')->get();
        $thuhoc = DB::table('tbl_themgiasu_thuday')->get();
        $loaihoc = DB::table('tbl_themgiasu_hienla')->get();
        $monhoc = DB::table('tbl_themgiasu_monday')->get();
        $ngayhoc = DB::table('tbl_themgiasu_ngayday')->get();
        $lophoc = DB::table('tbl_themgiasu_lopday')->get();


        return view('admin.chinhsuadanhsachlophoc')

            ->with(compact('csdslh'))
            ->with(compact('gt'))
            ->with(compact('loaihoc'))
            ->with(compact('thuhoc'))
            ->with(compact('monhoc'))
            ->with(compact('ngayhoc'))
            ->with(compact('lophoc'));
    }
    public function update_danhsachlophoc(request $request, $danhsachlophoc_id)
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


        DB::table('tbl_danhsachlophoc')->where('danhsachlophoc_id', $danhsachlophoc_id)->update($data);
        Session::put('message', 'Cập nhật lớp học thành công');
        return redirect('/danhsachlophoc');
    }
    public function remove_danhsachlophoc($danhsachlophoc_id)
    {
        DB::table('tbl_danhsachlophoc')->where('danhsachlophoc_id', $danhsachlophoc_id)->delete();
        Session::put('message', 'xóa thành công');
        return redirect('/danhsachlophoc');
    }


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
        $data['danhsachlophoc_status'] = '0';



        DB::table('tbl_danhsachlophoc')->insert($data);
        Session::flash('dklh', 'Thêm lớp học thành công');
        return redirect('/dangkilophoc');
    }

    public function chitietlopday($id)
    {
        if(Session::has('id_giasu')){
        $gs = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id',Session::get('id_giasu'))->first();
        $all_ctld = DB::table('tbl_danhsachlophoc')->where('danhsachlophoc_id', $id)
            ->join('tbl_themgiasu_monday', 'tbl_danhsachlophoc.danhsachlophoc_monhoc', '=', 'tbl_themgiasu_monday.id')
            ->join('tbl_themgiasu_lopday', 'tbl_danhsachlophoc.danhsachlophoc_lophoc', '=', 'tbl_themgiasu_lopday.id')
            ->join('tbl_danhsachgiasu_gender', 'tbl_danhsachlophoc.danhsachlophoc_gioitinh', '=', 'tbl_danhsachgiasu_gender.id')
            ->join('tbl_themgiasu_thuday', 'tbl_danhsachlophoc.danhsachlophoc_thuhoc', '=', 'tbl_themgiasu_thuday.id')
            ->first();
        
        return view('pages.chitietlopday')->with(compact('all_ctld',))->with(compact('gs',));

        }else{
            Session::flash('eror', 'Bạn cần đăng nhập để xem chi tiết lớp học');
            return redirect()->back();
        }
        
    }
    public function save_nhanlopday(request $request)
    {
        $data = array();
        
        $data['nhanlop_malop'] = $request->nhanlop_malop;
        $data['nhanlop_name'] = $request->nhanlop_name;
        $data['nhanlop_gioitinh'] = $request->nhanlop_gioitinh;
        $data['nhanlop_monday'] =$request->nhanlop_monday;
        $data['nhanlop_lopday'] =$request->nhanlop_lopday;
        $data['nhanlop_luong'] = $request->nhanlop_luong;
        $data['nhanlop_sobuoi'] =$request->nhanlop_sobuoi;
        $data['nhanlop_thuday'] =$request->nhanlop_thuday;
        $data['nhanlop_yeucau'] =$request->nhanlop_yeucau;
        $data['nhanlop_lienhe'] =$request->nhanlop_lienhe;
        $data['giasu_id'] =Session::get('id_giasu');
        $data['nhanlop_ten'] = $request->nhanlop_ten;
        $data['nhanlop_sdt'] = $request->nhanlop_sdt;
        $data['nhanlop_status'] =$request->nhanlop_status;
        $data['nhanlop_ngaynhan'] =$request->nhanlop_ngaynhan;
        $data['nhanlop_noidung'] = $request->nhanlop_noidung;
        $data['nhanlop_trangthai'] = 0;

        DB::table('tbl_nhanlop')->insert($data);
        Session::flash('ctld', 'Bạn đã thêm lớp học thành công. Vui lòng đến trung tâm để đóng tiền nhận lớp');
        $a = DB::table('tbl_danhsachlophoc')->where('danhsachlophoc_id' ,$request->nhanlop_malop)->update([
            'danhsachlophoc_status' => '1'
        ])
;
        return redirect('/');
    }
}

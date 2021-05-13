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

session_start();

class DuyetgiasuController extends Controller
{
    public function duyetgiasu()
    {
        $all_duyetgiasu = DB::table('tbl_duyetgiasu')  
            ->join('tbl_themgiasu_hienla', 'tbl_duyetgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
            ->get();
        // dd($all_duyetgiasu);
        // die();
        return view('admin.duyetgiasu')
        ->with(compact('all_duyetgiasu'));
       
    }

    public function themgiasu()
    {
        // $this->AuthLogin();
        $loaigs = DB::table('tbl_themgiasu_hienla')->get();
        $mongs = DB::table('tbl_themgiasu_monday')->get();
        $ngaygs = DB::table('tbl_themgiasu_ngayday')->get();
        $lopgs = DB::table('tbl_themgiasu_lopday')->get();

        return view('admin.themgiasu')
            ->with(compact('loaigs'))
            ->with(compact('mongs'))
            ->with(compact('ngaygs'))
            ->with(compact('lopgs'));
    }
    public function save_duyetgiasu(request $request)
    {

        $data = array();
        $data['danhsachgiasu_ten'] = $request->themgiasu_ten;
        $data['danhsachgiasu_email'] = $request->themgiasu_email;
        $data['danhsachgiasu_password'] = $request->themgiasu_password;
        $data['danhsachgiasu_ngaysinh'] = $request->themgiasu_ngaysinh;
        $data['danhsachgiasu_hienla'] = $request->themgiasu_hienla;
        $data['danhsachgiasu_lopday'] = $request->themgiasu_lopday;
        $data['danhsachgiasu_monday'] = $request->themgiasu_monday;
        $data['danhsachgiasu_ngayday'] = $request->themgiasu_ngayday;
        $data['danhsachgiasu_hienthi'] = 0;

        $get_image = $request->file('danhsachgiasu_hinhanh');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/duyetgiasu', $new_image);
            $data['danhsachgiasu_hinhanh'] = $new_image;
            DB::table('tbl_duyetgiasu')->insert($data);
            Session::put('message', 'Thêm gia sư thành công');
            return redirect('/duyetgiasu');
        }

        $data['duyetgiasu_hinhanh'] = '';
        DB::table('tbl_duyetgiasu')->insert($data);
        Session::put('message', 'Thêm gia sư thành công');
        return redirect('/duyetgiasu');
    }
    public function remove_duyetgiasu($duyetgiasu_id)
    {
        DB::table('tbl_duyetgiasu')->where('duyetgiasu_id', $duyetgiasu_id)->delete();
        Session::put('message', 'xóa thành công');
        return redirect('/duyetgiasu');
    }
}

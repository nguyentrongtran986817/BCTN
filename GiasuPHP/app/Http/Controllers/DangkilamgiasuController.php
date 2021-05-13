<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use DB;
use App\Models\SocialiteModel;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;

session_start();

class DangkilamgiasuController extends Controller
{
    public function dangkilamgiasu()
    {
        $loaigs = DB::table('tbl_themgiasu_hienla')->get();
        $mongs = DB::table('tbl_themgiasu_monday')->get();
        $ngaygs = DB::table('tbl_themgiasu_ngayday')->get();
        $lopgs = DB::table('tbl_themgiasu_lopday')->get();

        return view('pages.dangkilamgiasu')
            ->with(compact('loaigs'))
            ->with(compact('mongs'))
            ->with(compact('ngaygs'))
            ->with(compact('lopgs'));
    }
    public function save_dangkilamgiasu(request $request)
    {
        $data = array();
        $data['danhsachgiasu_ten'] = $request->themgiasu_ten;
        $data['danhsachgiasu_email'] = $request->themgiasu_email;
        $data['danhsachgiasu_password'] = $request->themgiasu_password;
        $data['danhsachgiasu_sdt'] = $request->themgiasu_sdt;
        $data['danhsachgiasu_ngaysinh'] = $request->themgiasu_ngaysinh;
        $data['danhsachgiasu_hienla'] =implode(',', $request->themgiasu_hienla);
        $data['danhsachgiasu_lopday'] =implode(',', $request->themgiasu_lopday);
        $data['danhsachgiasu_monday'] =implode(',', $request->themgiasu_monday);
        $data['danhsachgiasu_ngayday'] =implode(',', $request->themgiasu_ngayday);
        $data['danhsachgiasu_hienthi'] = 0;
        $data['danhsachgiasu_quyen'] = 1;

        $get_image = $request->file('danhsachgiasu_hinhanh');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/danhsachgiasu', $new_image);
            $data['danhsachgiasu_hinhanh'] = $new_image;
            DB::table('tbl_danhsachgiasu')->insert($data);
            Session::put('message', 'Thêm gia sư thành công');
            return redirect('/dangkilamgiasu');
        }

        $data['danhsachgiasu_hinhanh'] = '';
        DB::table('tbl_danhsachgiasu')->insert($data);
        Session::put('message', 'Thêm gia sư thành công');
        return redirect('/dangkilamgiasu');
    }
    
}

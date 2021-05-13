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

class DanhsachgiasuController extends Controller
{
    public function danhsachgiasu()
    {
        $all_danhsachgiasu = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_hienthi','1')  
            ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
            ->get();
        $all_hienla = DB::table('tbl_themgiasu_hienla')->get();
        return view('admin.danhsachgiasu')
        ->with(compact('all_danhsachgiasu','all_hienla'));   
    }
    public function themgiasu()
    {
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
    public function save_themgiasu(request $request)
    {
        $data = array();
        $data['danhsachgiasu_ten'] = $request->themgiasu_ten;
        $data['danhsachgiasu_sdt'] = $request->themgiasu_sdt;
        $data['danhsachgiasu_email'] = $request->themgiasu_email;
        $data['danhsachgiasu_password'] = $request->themgiasu_password;
        $data['danhsachgiasu_ngaysinh'] = $request->themgiasu_ngaysinh;
        $data['danhsachgiasu_hienla'] = implode(',', $request->themgiasu_hienla);
        $data['danhsachgiasu_lopday'] = implode(',', $request->themgiasu_lopday);
        $data['danhsachgiasu_monday'] = implode(',', $request->themgiasu_monday);
        $data['danhsachgiasu_ngayday'] = implode(',', $request->themgiasu_ngayday);
        $data['danhsachgiasu_hienthi'] = 1;
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
            return redirect('/danhsachgiasu');
        }
        $data['danhsachgiasu_hinhanh'] = '';
        DB::table('tbl_danhsachgiasu')->insert($data);
        Session::put('message', 'Thêm gia sư thành công');
        return redirect('/danhsachgiasu');
    }
    public function chinhsua_danhsachgiasu($danhsachgiasu_id)
    {
       
        $csdsgs = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $danhsachgiasu_id)->first();
        
        $loaigs = DB::table('tbl_themgiasu_hienla')->get();
        $mongs = DB::table('tbl_themgiasu_monday')->get();
        $ngaygs = DB::table('tbl_themgiasu_ngayday')->get();
        $lopgs = DB::table('tbl_themgiasu_lopday')->get();

        return view('admin.chinhsuadanhsachgiasu')
            ->with(compact('csdsgs'))
            ->with(compact('loaigs'))
            ->with(compact('mongs'))
            ->with(compact('ngaygs'))
            ->with(compact('lopgs'));
    }
    public function update_danhsachgiasu(request $request, $danhsachgiasu_id)
    {
        
        $data = array();
        $data['danhsachgiasu_ten'] = $request->themgiasu_ten;
        $data['danhsachgiasu_sdt'] = $request->themgiasu_sdt;
        $data['danhsachgiasu_email'] = $request->themgiasu_email;
        $data['danhsachgiasu_password'] = $request->themgiasu_password;
        $data['danhsachgiasu_ngaysinh'] = $request->themgiasu_ngaysinh;
        $data['danhsachgiasu_hienla'] = implode(',', $request->themgiasu_hienla);
        $data['danhsachgiasu_lopday'] = implode(',', $request->themgiasu_lopday);
        $data['danhsachgiasu_monday'] = implode(',', $request->themgiasu_monday);
        $data['danhsachgiasu_ngayday'] = implode(',', $request->themgiasu_ngayday);
        $data['danhsachgiasu_hienthi'] = 1;
        $data['danhsachgiasu_quyen'] = 1;
        $get_image = $request->file('danhsachgiasu_hinhanh');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/danhsachgiasu', $new_image);
            $data['danhsachgiasu_hinhanh'] = $new_image;
            DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $danhsachgiasu_id)->update($data);
            Session::put('message', 'Cập nhật gia sư thành công');
            return redirect('/danhsachgiasu');
            
        }
        $data['danhsachgiasu_hinhanh'] = $request->danhsachgiasu_hinhanh_old;
        DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $danhsachgiasu_id)->update($data);
        Session::put('message', 'Cập nhật gia sư thành công');
        return redirect('/danhsachgiasu');
    }
    public function remove_danhsachgiasu($danhsachgiasu_id)
    {
        DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $danhsachgiasu_id)->delete();
        Session::put('message', 'xóa thành công');
        return redirect('/danhsachgiasu');
    }

    public function giasutieubieu()
    {
        $all_chitietgiasu = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_hienthi','1') 
            ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
            ->join('tbl_themgiasu_monday', 'tbl_danhsachgiasu.danhsachgiasu_monday', '=', 'tbl_themgiasu_monday.id')
            ->join('tbl_themgiasu_lopday', 'tbl_danhsachgiasu.danhsachgiasu_lopday', '=', 'tbl_themgiasu_lopday.id')
            ->join('tbl_themgiasu_ngayday', 'tbl_danhsachgiasu.danhsachgiasu_ngayday', '=', 'tbl_themgiasu_ngayday.id')
            ->get();
        $all_lopday = DB::table('tbl_themgiasu_lopday')->get();
        $all_monday = DB::table('tbl_themgiasu_monday')->get();
        $all_thuday = DB::table('tbl_themgiasu_thuday')->get();
        return view('pages.giasutieubieu')->with(compact('all_chitietgiasu', 'all_lopday', 'all_monday','all_thuday'));
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


    public function save_nhangs(request $request)
    {
        $data = array();
        
        $data['nhangs_mags'] = $request->nhangs_mags;
        $data['nhangs_ten'] = $request->nhangs_ten;
        $data['nhangs_ngaysinh'] = $request->nhangs_ngaysinh;
        $data['nhangs_hienla'] =$request->	nhangs_hienla;
        $data['nhangs_hoten'] =$request->nhangs_hoten;
        $data['nhangs_diachi'] = $request->nhangs_diachi;
        $data['nhangs_sdt'] =$request->nhangs_sdt;
        $data['nhangs_monhoc'] =$request->nhangs_monhoc;
        $data['nhangs_slhs'] =$request->nhangs_slhs;
        $data['nhangs_hocluc'] =$request->nhangs_hocluc;
        $data['nhangs_thoigianhoc'] = $request->nhangs_thoigianhoc;
        $data['nhangs_yeucau'] = $request->nhangs_yeucau;
        $data['nhangs_trangthai'] = 0;
        // dd($data);die();

        DB::table('tbl_nhangs')->insert($data);
        Session::flash('ctgs', 'Bạn đã chọn gia sư thành công. Vui lòng đợi trung tâm liên hệ');
        return redirect('/giasutieubieu');
    }






    public function duyetgiasu()
    {
        $all_danhsachgiasu = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_hienthi','0')  
            ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')
            ->get();
        $all_hienla = DB::table('tbl_themgiasu_hienla')->get();
        return view('admin.duyetgiasu')
        ->with(compact('all_danhsachgiasu', 'all_hienla'));  
    }
    public function DuyetGS($id){   
        $data = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id',$id)
            ->update([
                'danhsachgiasu_hienthi' => '1'
            ]);
        Session::put('message', 'Duyệt gia sư thành công');
        return redirect('/duyetgiasu');
    }
    public function kDuyetGS($danhsachgiasu_id)
    {
        DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $danhsachgiasu_id)->delete();
        Session::put('message', 'xóa thành công');
        return redirect('/duyetgiasu');
    }




    public function thongtingiasu()
    {

        $csttgs = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', Session::get('id_giasu'))->first();
        $nhanlop = DB::table('tbl_nhanlop')->where('giasu_id', Session::get('id_giasu'))->get();
        // dd($csdsgs);die();
        $loaigs = DB::table('tbl_themgiasu_hienla')->get();
        $mongs = DB::table('tbl_themgiasu_monday')->get();
        $ngaygs = DB::table('tbl_themgiasu_ngayday')->get();
        $lopgs = DB::table('tbl_themgiasu_lopday')->get();
        return view('pages.thongtingiasu')
        ->with(compact('csttgs'))
        ->with(compact('loaigs'))
        ->with(compact('mongs'))
        ->with(compact('ngaygs'))
        ->with(compact('lopgs'))   
        ->with(compact('nhanlop'));    
    }
    public function update_thongtingiasu(request $request, $danhsachgiasu_id)
    {
        $data = array();
        $data['danhsachgiasu_ten'] = $request->themgiasu_ten;
        $data['danhsachgiasu_email'] = $request->themgiasu_email;
        $data['danhsachgiasu_password'] = $request->themgiasu_password;
        $data['danhsachgiasu_ngaysinh'] = $request->themgiasu_ngaysinh;
        $data['danhsachgiasu_hienla'] = implode(',', $request->themgiasu_hienla);
        $data['danhsachgiasu_lopday'] = implode(',', $request->themgiasu_lopday);
        $data['danhsachgiasu_monday'] = implode(',', $request->themgiasu_monday);
        $data['danhsachgiasu_ngayday'] = implode(',', $request->themgiasu_ngayday);
        $data['danhsachgiasu_hienthi'] = 1;
        $data['danhsachgiasu_quyen'] = 1;
        $get_image = $request->file('danhsachgiasu_hinhanh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/danhsachgiasu', $new_image);
            $data['danhsachgiasu_hinhanh'] = $new_image;
            
        }
        $data['danhsachgiasu_hinhanh'] = $request->danhsachgiasu_hinhanh_old;
        DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_id', $danhsachgiasu_id)->update($data);
        Session::put('message', 'Cập nhật gia sư thành công');
        return redirect('/thongtingiasu');
    }

    public function seachgs(Request $rq)
    {
        $all_danhsachgiasu = DB::table('tbl_danhsachgiasu')->select("*")
        ->where("danhsachgiasu_ten", "LIKE","%{$rq->name}%")->where('danhsachgiasu_hienthi','1')  
            ->join('tbl_themgiasu_hienla', 'tbl_danhsachgiasu.danhsachgiasu_hienla', '=', 'tbl_themgiasu_hienla.id')->get();
        $all_hienla = DB::table('tbl_themgiasu_hienla')->get();
        return view('admin.danhsachgiasu')->with(compact('all_danhsachgiasu','all_hienla'));
       
    }




}

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

class DanhsachuserController extends Controller
{
    // public function AuthLogin()
    //   {
    //      $id = Session::get('id');
    //      if($id)
    //      {
    //         return redirect('/admin_index');
    //      }
    //      else{
    //         return redirect('/admin_login')->send(); 
    //      }
    //   }
    public function danhsachuser()
    {
        $all_danhsachuser = DB::table('tbl_danhsachuser')->get();
        $all_danhsachuser = DB::table('tbl_danhsachuser')
            ->join('tbl_danhsachuser_gender', 'tbl_danhsachuser.gender', '=', 'tbl_danhsachuser_gender.id')
            ->get();
        return view('admin.danhsachuser')->with(compact('all_danhsachuser'));
    }

    public function themuser()
    {
        // $this->AuthLogin();
        $gt = DB::table('tbl_danhsachuser_gender')->get();

        return view('admin.themuser')
            ->with(compact('gt'));
    }
    public function save_themuser(request $request)
    {
        $data = array();
        $data['danhsachuser_name'] = $request->danhsachuser_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['gender'] = $request->themuser_gender;
        $data['birth'] = $request->birth;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;

        // dd($data);
        // die();


        DB::table('tbl_danhsachuser')->insert($data);
        Session::put('message', 'Thêm user thành công');
        return redirect('/danhsachuser');
    }
    public function chinhsua_danhsachuser($danhsachuser_id)
    {
        $csdsus = DB::table('tbl_danhsachuser')->where('danhsachuser_id', $danhsachuser_id)->first();
        $gt = DB::table('tbl_danhsachuser_gender')->get();

        return view('admin.chinhsuadanhsachuser')
            ->with(compact('csdsus'))
            ->with(compact('gt'));
    }
    public function update_danhsachuser(request $request, $danhsachuser_id)
    {
        $data = array();
        $data['danhsachuser_name'] = $request->danhsachuser_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['gender'] = $request->themuser_gender;
        $data['birth'] = $request->birth;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;


        DB::table('tbl_danhsachuser')->where('danhsachuser_id', $danhsachuser_id)->update($data);
        Session::put('message', 'Cập nhật user thành công');
        return redirect('/danhsachuser');
    }
    public function remove_danhsachuser($danhsachuser_id)
    {
        DB::table('tbl_danhsachuser')->where('danhsachuser_id', $danhsachuser_id)->delete();
        Session::put('message', 'xóa thành công');
        return redirect('/danhsachuser');
    }
}

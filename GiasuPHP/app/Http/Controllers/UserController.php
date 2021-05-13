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

class UserController extends Controller
{
    public function user(Request $rq)
    {
        $email = $rq->email;
        $password = $rq->password;


        // $result = DB::table('tbl_danhsachgiasu')
        //     ->where('danhsachgiasu_email', $email)
        //     ->where('danhsachgiasu_password', $password)
        //     ->first();
        // dd($result);
        
        // if ($result) {
        //     Session::put('danhsachuser_name', $result->danhsachuser_name);
        //     Session::put('danhsachuser_id', $result->danhsachuser_id);
        //     return redirect('/giasutieubieu');
        // } else {
        //     Session::put('message', 'Tài khoản hoặc mật khẩu không hợp lệ!');
        //     return redirect('pages.home');
        // }
        
        $result = DB::table('tbl_danhsachgiasu')->where('danhsachgiasu_email', $email)->first();
        $data = DB::table('tbl_danhsachuser')->where('email', $email)->first();
       
        if($result){
            $b = $result->danhsachgiasu_quyen;
            if($b == 1 && $result->danhsachgiasu_password == $password){
                Session::put('name',$result->danhsachgiasu_ten);
                Session::put('id_giasu',$result->danhsachgiasu_id);
                // $id = Session::get('id');
                return redirect('/thongtingiasu');
            }else{
                Session::put('message','Tài khoản hoặc mật khẩu không hợp lệ!');
                return redirect('/');
            }
        }
        if($data){
             $a = $data->danhsachuser_quyen;
             if($a == 0 && $data->password == $password){
                return redirect('/giasutieubieu');
            }else{
               
                Session::put('message','Tài khoản hoặc mật khẩu không hợp lệ!');
                return redirect('/');
            }
        }
    
       
    }
    public function logout_home()
    {
        session()->forget('name');
        session()->forget('id_giasu');
        // Session::put('danhsachgiau_id', null);
        return redirect::to('/');
    }
}

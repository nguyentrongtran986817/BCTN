<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\SocialiteModel;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;

session_start();

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function admin_login()
    {
        return view('admin.admin_login');
    }
    public function admin_index()
    {
        return view('admin.admin_index');
    }
    public function index(Request $rq)
    {
        $admin_email = $rq->admin_email;
        $admin_password = $rq->admin_password;


        $result = DB::table('tbl_admin')
            ->where('admin_email', $admin_email)
            ->where('admin_password', $admin_password)
            ->first();
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('id', $result->id);
            return redirect('/admin_index');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu không hợp lệ!');
            return redirect('admin_login');
        }
    }
    public function logout()
    {
        Session::put('admin_name', null);
        Session::put('id', null);
        return redirect::to('/admin_login');
    }
}

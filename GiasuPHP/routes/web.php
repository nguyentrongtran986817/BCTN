<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HocphithamkhaoController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\GiasutieubieuController;
use App\Http\Controllers\DanhsachgiasuController;
use App\Http\Controllers\DanhsachlophocController;
use App\Http\Controllers\DanhsachuserController;
use App\Http\Controllers\DanhsachcanlophocController;
use App\Http\Controllers\DangkilophocController;
use App\Http\Controllers\DangkilamgiasuController;
use App\Http\Controllers\DuyetgiasuController;
use App\Http\Controllers\ThanhtoanController;
use App\Http\Controllers\EmpController;


// use App\Http\Controllers\HocphithamkhaoController;
// use App\Http\Controllers\PhuhuynhcanbietController;


// Route::get('/', function () {
//     return view('layout');
// });



Route::get('/',[DanhsachcanlophocController::class,'danhsachcanlophoc']);
Route::get('/dangkilamgiasu',[DangkilamgiasuController::class,'dangkilamgiasu']);
Route::post('/save_dangkilamgiasu',[DangkilamgiasuController::class,'save_dangkilamgiasu']);
Route::get('/dangkilophoc',[DanhsachlophocController::class,'dangkilophoc']);
Route::post('/save_dangkilophoc',[DanhsachlophocController::class,'save_dangkilophoc']);
Route::get('/gioithieu',[HomeController::class,'gioithieu']);
Route::get('/hocphithamkhao',[HomeController::class,'hocphithamkhao']);
Route::get('/phuhuynhcanbiet',[HomeController::class,'phuhuynhcanbiet']);



Route::get('/admin',[AdminController::class,'admin']);
Route::get('/admin_login',[AdminController::class,'admin_login']);
Route::get('/admin_index',[AdminController::class,'admin_index']);

//Danh sách gia sư
Route::get('/danhsachgiasu',[DanhsachgiasuController::class,'danhsachgiasu']);
Route::get('/themgiasu',[DanhsachgiasuController::class,'themgiasu']);
Route::post('/save_themgiasu',[DanhsachgiasuController::class,'save_themgiasu']);
Route::get('/chinhsuadanhsachgiasu/{danhsachgiasu_id}',[DanhsachgiasuController::class,'chinhsua_danhsachgiasu']);
Route::post('/update_danhsachgiasu/{danhsachgiasu_id}',[DanhsachgiasuController::class,'update_danhsachgiasu']);
Route::get('/remove_danhsachgiasu/{danhsachgiasu_id}',[DanhsachgiasuController::class,'remove_danhsachgiasu']);
Route::get('/thongtingiasu', [DanhsachgiasuController::class, 'thongtingiasu']);
Route::post('/update_thongtingiasu/{danhsachgiasu_id}', [DanhsachgiasuController::class, 'update_thongtingiasu']);
Route::get('/duyetgiasu', [DanhsachgiasuController::class, 'duyetgiasu']);
Route::get('/duyetgiasubyid/{id}', [DanhsachgiasuController::class, 'DuyetGS']);
Route::get('/kduyetgiasubyid/{id}', [DanhsachgiasuController::class, 'kDuyetGS']);
Route::get('/giasutieubieu',[DanhsachgiasuController::class,'giasutieubieu']);
Route::post('/save_nhangs',[DanhsachgiasuController::class,'save_nhangs']);
Route::post('/seachgs',[DanhsachgiasuController::class,'seachgs'])->name('seachgs');





//Danh sách lớp học
Route::get('/danhsachlophoc',[DanhsachlophocController::class,'danhsachlophoc']);
Route::get('/themlophoc',[DanhsachlophocController::class,'themlophoc']);
Route::post('/save_themlophoc',[DanhsachlophocController::class,'save_themlophoc']);
Route::get('/chinhsuadanhsachlophoc/{danhsachlophoc_id}',[DanhsachlophocController::class,'chinhsua_danhsachlophoc']);
Route::post('/update_danhsachlophoc/{danhsachlophoc_id}',[DanhsachlophocController::class,'update_danhsachlophoc']);
Route::get('/remove_danhsachlophoc/{danhsachlophoc_id}',[DanhsachlophocController::class,'remove_danhsachlophoc']);

//Danh sách user

Route::get('/danhsachuser',[DanhsachuserController::class,'danhsachuser']);
Route::get('/themuser',[DanhsachuserController::class,'themuser']);
Route::post('/save_themuser',[DanhsachuserController::class,'save_themuser']);
Route::get('/chinhsuadanhsachuser/{danhsachuser_id}',[DanhsachuserController::class,'chinhsua_danhsachuser']);
Route::post('/update_danhsachuser/{danhsachuser_id}',[DanhsachuserController::class,'update_danhsachuser']);
Route::get('/remove_danhsachuser/{danhsachuser_id}',[DanhsachuserController::class,'remove_danhsachuser']);


Route::post('/login', [AdminController::class, 'index']);
Route::get('/logout',[AdminController::class,'logout']);
Route::get('/logout_home',[UserController::class,'logout_home']);
Route::post('/save_login',[UserController::class,'user']);

//chitietnhanlop
Route::get('/chitietlopday/{id}',[DanhsachlophocController::class,'chitietlopday']);
Route::post('/save_nhanlopday',[DanhsachlophocController::class,'save_nhanlopday']);

//chitietgiasu
Route::get('/chitietgiasu/{id}',[GiasutieubieuController::class,'chitietgiasu']);





Route::get('/inhoadon/{giasu_id}',[ThanhtoanController::class,'inhoadon']);
Route::get('/nhanlop',[ThanhtoanController::class,'nhanlop']);
Route::get('/update_nhanlop/{nhanlop_id}',[ThanhtoanController::class,'update_nhanlop']);
Route::get('/nhangiasu',[ThanhtoanController::class,'nhangiasu']);
Route::get('/update_nhangiasu/{id}',[ThanhtoanController::class,'update_nhangiasu']);



Route::get('/abc',[ThanhtoanController::class,'allpdf']);
Route::get('/download-pdf',[ThanhtoanController::class, 'downloadPDF']);



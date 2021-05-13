@extends('layout')
@section('content')
<div class="col_c">

<form method="POST" action="{{URL::to('/save_nhangs')}}" id="form__dk_tim_giasu" class="fm NiceIt" enctype="multipart/form-data">
    @csrf
    <h2 class="sh_b3">GIA SƯ ĐÃ CHỌN</h2>
    <div class="gsdc_out clearfix">
                    <div class="item_gsdc clearfix">
                <div class="clearfix">
                    <p class="gsdc_img"><img src="{{asset('/uploads/danhsachgiasu/'.$ctgs->danhsachgiasu_hinhanh)}}"></p>
                    <dl class="gsdc_info">
                        
                        <dt>Mã số: </dt>
                        <dd><span>{{$ctgs->danhsachgiasu_id}}</span></dd>
                        <input type="hidden" name='nhangs_mags' value='{{$ctgs->danhsachgiasu_id}}'>
                        <dt>Họ tên:</dt>
                        <dd>{{$ctgs->danhsachgiasu_ten}}</dd>
                        <input type="hidden" name='nhangs_ten' value='{{$ctgs->danhsachgiasu_ten}}'>
                        <dt>Năm sinh:</dt>
                        <dd>{{$ctgs->danhsachgiasu_ngaysinh}}</dd>
                        <input type="hidden" name='nhangs_ngaysinh' value='{{$ctgs->danhsachgiasu_ngaysinh}}'>
                        <dt>Hiện là:</dt>
                        <dd>{{$ctgs->hienla_name}}</dd>
                        <input type="hidden" name='nhangs_hienla' value='{{$ctgs->hienla_name}}'>
                    </dl>
                </div>
             
            </div>
               
    </div>
    <p class="more_g4">
        
    </p>
    <h3 class="gsdc_sh">ĐIỀN THÔNG TIN ĐĂNG KÝ CHỌN GIA SƯ</h3>
    <div class="formOut clearfix">
        <div class="formOut clearfix">
            
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Họ tên (<span>*</span>)</p>
                    <div class="formOut_field">
                        <input type="text" id="fullname" name="nhangs_hoten" value="" class="in_405">
                    </div>                            
                </div>
                
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Địa chỉ</p>
                    <div class="formOut_field">
                        <input type="text" id="address" name="nhangs_diachi" value="" class="in_405">
                    </div>                            
                </div>
                
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Điện thoại (<span>*</span>)</p>
                    <div class="formOut_field">
                        <input type="text" id="phone" name="nhangs_sdt" value="" class="in_405">
                    </div>                            
                </div>

                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Môn học</p>
                    <div class="formOut_field">
                        <input type="text" id="mon_hoc" name="nhangs_monhoc" value="" placeholder="Ví dụ: Toán, lý, hóa,..." class="in_405">
                    </div>                            
                </div>
                
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Số lượng học sinh</p>
                    <div class="formOut_field">
                        <input type="text" id="so_hoc_sinh" name="nhangs_slhs" value="" class="in_405" placeholder="Ví dụ: 1 học sinh">
                    </div>                            
                </div>
                
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Học lực hiện tại</p>
                    <div class="formOut_field">
                        <input type="text" id="hoc_luc" name="nhangs_hocluc" value="" class="in_405" placeholder="Ví dụ: trung bình">
                    </div>                            
                </div>
                
              
                
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Thời gian học</p>
                    <div class="formOut_field">
                        <input type="text" id="thoi_gian" name="nhangs_thoigianhoc" placeholder="Ví dụ: Thứ 2 - thứ 4; 17h - 19h" value="" class="in_405">
                    </div>                            
                </div>
                
               
                
                <div class="formOut_line clearfix" style="display: none">
                    <p class="formOut_lab">MS gia sư đã chọn (<span>*</span>)</p>
                    <div class="formOut_field">
                        <input type="text" id="" name="" placeholder="Ví dụ: Mã số 2280, 3150,..." value="" class="in_405">
                        <p class="bg_txt bg_txt3">Chọn gia sư tại đây <a href="#">Chọn gia sư</a></p>
                    </div>                            
                </div>
                
                <div class="formOut_line clearfix">
                    <p class="formOut_lab">Yêu câu khác</p>
                    <div class="formOut_field">
                        <textarea id="yeu_cau" name="nhangs_yeucau" rows="" cols="" class="area_100"></textarea>
                    </div>                            
                </div>
                                <input type="hidden" name="select__giasu" id="select__giasu__input" value="0">
                <p class="dangky_btn clearfix">                            
                    <input type="submit" id="" name="" value="ĐĂNG KÝ" class="btn_s3">  
                   
                </p>          
            
        </div>
    </div>
    </form>
</div>

@endsection
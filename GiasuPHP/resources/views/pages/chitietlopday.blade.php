@extends('layout')
@section('content')
<div class="col_c">
    <div class="newClass">
        <h2 class="sh_b3">THÔNG TIN CHI TIẾT</h2>
  <form method="post" action="{{URL::to('/save_nhanlopday')}}" class="fm NiceIt" id="form__dk__nhanlop" enctype="multipart/form-data">
  @csrf
        <h3 class="ldcgs_sh mt-5"></h3>
        <div class="ldcgs_info clearfix">
            <div class="ldcgs_info_l">
                <dl class="clearfix">
                    <dt>Mã lớp:</dt>
                    <dd><span>{{$all_ctld->danhsachlophoc_id}}</span> - <span style="color: #fff" class="label label-round label-success">Lớp chưa giao</span></dd>
                    <input type="hidden" name='nhanlop_malop' value='{{$all_ctld->danhsachlophoc_id}}'>
                    <dt>Họ Và Tên Học Sinh:</dt>
                    <dd>{{$all_ctld->danhsachlophoc_name}} </dd>
                    <input type="hidden" name='nhanlop_name' value='{{$all_ctld->danhsachlophoc_name}}'>
                    <dt>Giới Tính:</dt>
                    <dd>{{$all_ctld->gender_name}} </dd>
                    <input type="hidden" name='nhanlop_gioitinh' value='{{$all_ctld->gender_name}}'>
                    <dt>Môn dạy:</dt>
                    <dd>{{$all_ctld->monday_name}}</dd>
                    <input type="hidden" name='nhanlop_monday' value='{{$all_ctld->monday_name}}'>
                    <dt>Lớp dạy:</dt>
                    <dd>{{$all_ctld->lopday_name}}</dd>
                    <input type="hidden" name='nhanlop_lopday' value='{{$all_ctld->lopday_name}}'>
                    <dt>Mức lương:</dt>
                    <dd>{{$all_ctld->danhsachlophoc_luong}}<sup>đ</sup>/tháng</dd>
                    <input type="hidden" name='nhanlop_luong' value='{{$all_ctld->danhsachlophoc_luong}}'>
                    <dt>Số buổi:</dt>
                    <dd>{{$all_ctld->danhsachlophoc_sobuoi}} buổi /tuần</dd>
                    <input type="hidden" name='nhanlop_sobuoi' value='{{$all_ctld->danhsachlophoc_sobuoi}}'>
                    <dt>Thời gian:</dt>
                    <dd>{{$all_ctld->thuday_name}}</dd>
                    <input type="hidden" name='nhanlop_thuday' value='{{$all_ctld->thuday_name}}'>
                    <dt>Yêu cầu:</dt>
                    <dd>{{$all_ctld->danhsachlophoc_yeucau}}</dd>
                    <input type="hidden" name='nhanlop_yeucau' value='{{$all_ctld->danhsachlophoc_yeucau}}'>
                    <dt>Liên hệ:</dt>
                    <dd><span>{{$all_ctld->danhsachlophoc_lienhe}}</span></dd>
                    <input type="hidden" name='nhanlop_lienhe' value='{{$all_ctld->danhsachlophoc_lienhe}}'>
                </dl>
                <ul class="ldcgs_info_l2">
                    <div class="addthis_inline_share_toolbox_ogy4"></div>
                </ul>
            </div>

            <div class="ldcgs_info_r">
                <div class="ldcgs_inner">
                    <h3>ĐĂNG KÝ NHANH</h3>
                    <div class="ldcgs_f clearfix">
                        <form method="post" class="fm NiceIt" id="form__dk__nhanlop" enctype="multipart/form-data">

                            <input type="hidden" id="idlop" name="idlop" value="28782">
                            <span class="fmInput" id="fmInp-fm-0-1" ><input id="phone" name="nhanlop_ten" value="{{$gs->danhsachgiasu_ten}}"  class="lgs_in_text fmZero"  type="text"></span>
                            <span class="fmInput" id="fmInp-fm-0-1" ><input id="phone" name="nhanlop_sdt" value="{{$gs->danhsachgiasu_sdt}}"  class="lgs_in_text fmZero"  type="text"></span>
                            <span class="w49">
                                <select id="chuyenkhoan" name="nhanlop_status" class="clsip slinput fmZero" style="width:100%; margin:0px;">
                                    <option value="">--Hình thức nhận lớp--</option>
                                    <option value="0">Chuyển Khoản (Đóng 35%)</option>
                                    <option value="1">Tới Trung Tâm (Đóng 35%)</option>
                                </select> 
                            </span>
                            <span class="ldcgs_f_txt">Thời gian nhận lớp:</span>
                            <span class="fmInput" id="fmInp-fm-0-2" style="width: 100%;">
                                <span><input id="thoigian_ngay" name="nhanlop_ngaynhan" value="" placeholder="Nhập ngày nhận" class="lgs_in_text2 fmZero" tabindex="3" style="width: 100%;" type="date"></span></span>
                            
                            <span class="fmInput" id="fmInp-fm-0-3" style="width: 99%;">
                                <span><input id="" name="nhanlop_noidung" value="" placeholder="Nội dung thêm (nếu có)" class="lgs_in_text fmZero"  style="width: 100%;" type="text"></span>
                            </span>
                            <input id="" name="" value="Nhận Lớp" class="btn_s3" tabindex="6" type="submit">
                        </form>
                    </div>
                </div>
            </div>
                            <div class="clearfix"></div>
                <div class=""><p style="font-weight: bold;"><span style="color: blue">Chi tiết về lớp dạy: </span>Giáo Viên có kinh nghiệm dạy, chất lượng tốt, bé bị mất căn bản, cần lấy lại kiến thức cho bé</p></div>
                    </div>
      
        
        </form>
    </div>
</div>
@endsection
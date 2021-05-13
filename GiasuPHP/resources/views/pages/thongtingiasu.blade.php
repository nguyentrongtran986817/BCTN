@extends('layout')
@section('content')
<div class="col_c">
    <div class="newClass">
        <h2 class="sh_b3">THÔNG TIN GIA SƯ</h2>
        <p style="text-transform:uppercase; text-align:center;padding:20px 10px; font-weight: bold">Gia sư: <font size="3" color="#f96868">Trần Trọng Nguyên</font>
        </p>
        <p style="background:lightpink;padding:2px 5px;"></p>
        <div class="dsgsdk">
            <h4>DANH SÁCH CÁC LỚP ĐĂNG KÝ</h4>
            <br>
        </div>
        <table class="dsgsdk_table">
            <tbody>
                <tr>
                    <th class="col_1">MS.Lớp</th>
                    <th class="col_2">Họ tên học sinh</th>
                    <th class="col_3">Lương</th>
                    <th class="col_4">Hình thức</th>
                    <th class="col_5">Trạng thái</th>
                </tr>
                <?php foreach ($nhanlop as $key => $value) : ?>
                    <tr>

                        <td>{{$value->nhanlop_malop}}</td>
                        <td>{{$value->nhanlop_name}}</td>
                        <td>{{$value->nhanlop_luong}}</td>
                        <td>
                            @if($value->nhanlop_status == 0)
                            <p>Chuyển khoản</p>
                            @endif
                            @if($value->nhanlop_status == 1)
                            <p>Tiền mặt</p>
                            @endif
                        </td>
                        <td>
                            @if($value->nhanlop_trangthai == 0)
                            <p style='color:#FF0606'>Chưa thanh toán</p>
                            @endif
                            @if($value->nhanlop_trangthai == 1)
                            <p style='color:#58FA82'>Đã thanh toán</p>
                            @endif
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


        <p class="dsgsdk_btn">
            <a href="{{URL::to('/')}}" title="Xem thêm lớp đang cần Gia sư">Xem thêm lớp đang cần Gia sư</a>
        </p>
        <br>
        <h2 class="sh_b3">CHỈNH SỬA HỒ SƠ</h2>

        <form role="form" action="{{URL::to('/update_thongtingiasu/'.$csttgs->danhsachgiasu_id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <?php
            $message = Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message', null);
            }
            ?>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Họ tên (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" class="in_405" name="themgiasu_ten" value="{{$csttgs->danhsachgiasu_ten}}">
                </div>
            </div>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Email (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="email" class="in_405" name="themgiasu_email" value="{{$csttgs->danhsachgiasu_email}}">
                </div>
            </div>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Password (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="password" class="in_405" name="themgiasu_password" placeholder="Điền password">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Hình Ảnh (<span>*</span>)</p>
                <div class="formOut_field">
                    <img src="{{asset('/uploads/danhsachgiasu/'.$csttgs->danhsachgiasu_hinhanh)}}" width='100px' alt="">
                    <input type="file" class="form-control" name="danhsachgiasu_hinhanh" id="input-2">
                    <input type="hidden" name="danhsachgiasu_hinhanh_old" value="{{$csttgs->danhsachgiasu_hinhanh}}">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Ngày Sinh (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="date" class="form-control" name="themgiasu_ngaysinh" id="input-3" value="{{$csttgs->danhsachgiasu_ngaysinh}}">
                </div>
            </div>




            <div class="formOut_line clearfix">
                <p class="formOut_lab">Hiện là (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($loaigs as $key => $loai) : ?>
                            @if($csttgs->danhsachgiasu_hienla == $loai->id)
                            <input value="{{$loai->id}}" type="checkbox" name="themgiasu_hienla[]" checked>
                            <label>{{$loai->hienla_name}}</label>
                            @else
                            <input value="{{$loai->id}}" type="checkbox" name="themgiasu_hienla[]">
                            <label>{{$loai->hienla_name}}</label>
                            @endif
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Lớp dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($lopgs as $key => $lop) : ?>


                            <input type="checkbox" <?php
                                                    $a = explode(',', $csttgs->danhsachgiasu_lopday);
                                                    for ($i = 0; $i < count($a); $i++) {
                                                        if ($a[$i] == $lop->id) {
                                                    ?> checked <?php
                                                        }
                                                    }
                                            ?> value="{{$lop->id}}" name="themgiasu_lopday[]">
                            <label>{{$lop->lopday_name}}</label>

                        <?php endforeach ?>

                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Môn dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">

                        <?php foreach ($mongs as $key => $mon) : ?>
                            <input type="checkbox" <?php
                                                    $a = explode(',', $csttgs->danhsachgiasu_monday);
                                                    for ($i = 0; $i < count($a); $i++) {
                                                        if ($a[$i] == $mon->id) {
                                                    ?> checked <?php
                                                        }
                                                    }
                                            ?> value="{{$mon->id}}" name="themgiasu_monday[]">
                            <label>{{$mon->monday_name}}</label>


                        <?php endforeach ?>

                    </ul>
                </div>
            </div>



            <div class="formOut_line clearfix">
                <p class="formOut_lab">Thứ dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($ngaygs as $key => $ngay) : ?>
                            <input type="checkbox" <?php
                                                    $a = explode(',', $csttgs->danhsachgiasu_ngayday);
                                                    for ($i = 0; $i < count($a); $i++) {
                                                        if ($a[$i] == $ngay->id) {
                                                    ?> checked <?php
                                                        }
                                                    }
                                            ?> value="{{$ngay->id}}" name="themgiasu_ngayday[]">
                            <label>{{$ngay->ngayday_name}}</label>
                        <?php endforeach ?>
                </div>
            </div>

            <p class="dangky_btn clearfix">
                <input type="submit" name="capnhatgiasu" value="Cập nhật gia sư" class="btn_s3">
            </p>
        </form>
    </div>
</div>
@endsection
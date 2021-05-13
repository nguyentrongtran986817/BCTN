@extends('layout')
@section('content')
<div class="col_c">
    <h2 class="sh_b3">ĐĂNG KÝ LÀM GIA SƯ</h2>
    <?php
    $message = Session::get('message');
    if ($message) {
        echo $message;
        Session::put('message', null);
    }
    ?>
    <div class="formOut clearfix">
        <form role="form" action="{{URL::to('/save_dangkilamgiasu')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Họ tên (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" class="in_405" name="themgiasu_ten" placeholder="Vui lòng điền họ và tên">
                </div>
            </div>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Email (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="email" class="in_405" name="themgiasu_email" placeholder="Vui lòng điền email">
                </div>
            </div>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Password (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="password" class="in_405" name="themgiasu_password" placeholder="Điền password">
                </div>
            </div>
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số điện thoại (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" class="in_405" name="themgiasu_sdt" placeholder="Vui lòng điền SDT">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Hình Ảnh (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="file" class="form-control" name="danhsachgiasu_hinhanh" id="exampleInputEmail1">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Ngày Sinh (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="date" class="form-control" name="themgiasu_ngaysinh" id="input-3" placeholder="Vui lòng điền năm sinh">
                </div>
            </div>




            <div class="formOut_line clearfix">
                <p class="formOut_lab">Hiện là (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($loaigs as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_hienla[]">
                                <label>{{$value->hienla_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Lớp dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($lopgs as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_lopday[]">
                                <label>{{$value->lopday_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Môn dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($mongs as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_monday[]" id="md_1">
                                <label>{{$value->monday_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Thứ dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($ngaygs as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_ngayday[]">
                                <label>{{$value->ngayday_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <p class="dangky_btn clearfix">
                <input type="submit" name="themgiasu" value="ĐĂNG KÝ" class="btn_s3">
            </p>
        </form>
    </div>
</div>
@endsection
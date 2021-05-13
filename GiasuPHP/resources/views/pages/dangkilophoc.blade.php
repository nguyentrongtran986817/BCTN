@extends('layout')
@section('content')
<div class="col_c">
    <h2 class="sh_b3">ĐĂNG KÝ LỚP HỌC</h2>
    @if(Session::has('dklh'))
    <script>
        swal("Thành Công", "{!! Session::get('dklh')!!}", "success", {
            button:"OK",
        })
    </script>
    @endif
    <div class="formOut clearfix">
        <form role="form" action="{{URL::to('/save_dangkilophoc')}}" method="post">
            @csrf
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Họ tên (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="fullname" name="danhsachlophoc_name" value="" class="in_405">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Giới tính</p>
                <div class="formOut_field clearfix">
                    <span class="w160">
                        <select class="form-control" name="danhsachlophoc_gioitinh">
                            <?php foreach ($gt as $key => $value) : ?>
                                <option value="{{$value->id}}">{{$value->gender_name}}</option>
                            <?php endforeach ?>
                        </select>
                    </span>
                </div>
            </div>




            <div class="formOut_line clearfix">
                <p class="formOut_lab">Môn dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($monhoc as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="danhsachlophoc_monhoc[]">
                                <label>{{$value->monday_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Lớp dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($lophoc as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="danhsachlophoc_lophoc[]">
                                <label>{{$value->lopday_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Ngày dạy (<span>*</span>)</p>
                <div class="formOut_field">
                    <ul class="check_l1 clearfix">
                        <?php foreach ($thuhoc as $key => $value) : ?>
                            <li>
                                <input type="checkbox" value="{{$value->id}}" name="danhsachlophoc_thuhoc[]">
                                <label>{{$value->thuday_name}}</label>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Địa chỉ</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="danhsachlophoc_diachi" value="" class="in_405" placeholder="Vui lòng điền địa chỉ">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Lương</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="danhsachlophoc_luong" value="" class="in_405" placeholder="Ví dụ: 1000000">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số Buổi / tuần</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="danhsachlophoc_sobuoi" value="" class="in_405"placeholder="Ví dụ:3buổi/ tuần">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Thời Gian</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="danhsachlophoc_thoigian" value="" class="in_405"placeholder="Ví dụ: 120P">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Yêu Cầu</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="danhsachlophoc_yeucau" value="" class="in_405" placeholder="Nếu không yêu cầu vui lòng điền không có">
                </div>
            </div>

            <div class="formOut_line clearfix">
                <p class="formOut_lab">Liên Hệ</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="danhsachlophoc_lienhe" value="" class="in_405"placeholder="Vui lòng điền số điện thoại">
                </div>
            </div>


            <p class="dangky_btn clearfix">
                <input type="submit" id="" name="" value="ĐĂNG KÝ" class="btn_s3">
            </p>
            <input type="hidden" name="select__giasu" id="select__giasu__input" value="0">
        </form>
    </div>
</div>
@endsection
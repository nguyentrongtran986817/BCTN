@extends('admin')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">THÊM GIA SƯ</div>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
                <hr>
                <form role="form" action="{{URL::to('/save_themgiasu')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Họ Và Tên</label>
                        <input type="text" class="form-control" name="themgiasu_ten" id="input-1" placeholder="Vui lòng điền họ và tên">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Số điện thoại</label>
                        <input type="number" class="form-control" name="themgiasu_sdt" id="input-1" placeholder="Vui lòng điền số điện thoại">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Email</label>
                        <input type="email" class="form-control" name="themgiasu_email" id="input-1" placeholder="Vui lòng điền email">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Password</label>
                        <input type="password" class="form-control" name="themgiasu_password" id="input-1" placeholder="Điền password">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" class="form-control" name="danhsachgiasu_hinhanh" id="exampleInputEmail1">

                        </div>
                        <div class="form-group">
                            <label for="input-3">Năm Sinh</label>
                            <input type="date" class="form-control" name="themgiasu_ngaysinh" id="input-3" placeholder="Vui lòng điền năm sinh">
                        </div>
                        <div class="form-group">
                            <label for="input-3">Hiện là :</label><br>

                            <?php foreach ($loaigs as $key => $value) : ?>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_hienla[]">
                                <label for=" vehicle1">{{$value->hienla_name}}</label>
                            <?php endforeach ?>

                        </div>

                        <div class="form-group">
                            <label for="input-3">Lớp Dạy</label><br>


                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <?php foreach ($lopgs as $key => $a) : ?>
                                            <?php if ($key <= 5) { ?>

                                                <input type="checkbox" value="{{$a->id}}" name="themgiasu_lopday[]">
                                                <label for="vehicle1">{{$a->lopday_name}}</label>
                                            <?php } ?>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php foreach ($lopgs as $key => $a) : ?>
                                            <?php if ($key > 5) { ?>
                                                <input type="checkbox" value="{{$a->id}}" name="themgiasu_lopday[]">
                                                <label for="vehicle1">{{$a->lopday_name}}</label>
                                            <?php } ?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-3">Môn Dạy</label><br>
                            <?php foreach ($mongs as $key => $value) : ?>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_monday[]">
                                <label for="vehicle1">{{$value->monday_name}}</label>
                            <?php endforeach ?>
                        </div>

                        <div class="form-group">
                            <label for="input-3">Ngày Dạy</label><br>
                            <?php foreach ($ngaygs as $key => $value) : ?>
                                <input type="checkbox" value="{{$value->id}}" name="themgiasu_ngayday[]" >
                                <label for="vehicle1">{{$value->ngayday_name}}</label>
                            <?php endforeach ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name='themgiasu' class="btn btn-light px-5"><i class="icon-lock"></i> Thêm Gia Sư</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
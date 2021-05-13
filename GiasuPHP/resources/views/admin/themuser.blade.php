@extends('admin')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">THÊM USER</div>
                <?php
        $message = Session::get('message');
        if ($message) {
          echo $message;
          Session::put('message', null);
        }
        ?>
                <hr>
                <form role="form" action="{{URL::to('/save_themuser')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Họ Và Tên</label>
                        <input type="text" class="form-control" name="danhsachuser_name" id="input-1"
                            placeholder="Vui lòng điền họ và tên">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Email</label>
                        <input type="email" class="form-control" name="email" id="input-1"
                            placeholder="Vui lòng điền email">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Password</label>
                        <input type="password" class="form-control" name="password" id="input-1"
                            placeholder="Điền password">
                    </div>
                    <div class="form-group">
                        <label for="input-3">Giới tính</label>
                        <select class="form-control" name="themuser_gender">
                            <?php foreach ($gt as $key => $value) : ?>
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            <?php endforeach ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-3">Ngày Sinh</label>
                        <input type="date" class="form-control" name="birth" id="input-3"
                            placeholder="Vui lòng điền năm sinh">
                    </div>
                    <div class="form-group">
                        <label for="input-3">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" id="input-3"
                            placeholder="Vui lòng điền địa chỉ">
                    </div>
                    <div class="form-group">
                        <label for="input-3">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" id="input-3"
                            placeholder="Vui lòng điền số điện thoại">
                    </div>
                    <div class="form-group">
                        <button type="submit" name='themguser' class="btn btn-light px-5"><i class="icon-lock"></i> Thêm
                            User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
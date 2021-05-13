@extends('admin')
@section('content')

<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">THÊM LỚP HỌC</div>
        <?php
        $message = Session::get('message');
        if ($message) {
          echo $message;
          Session::put('message', null);
        }
        ?>
        <hr>
        <form role="form" action="{{URL::to('/save_themlophoc')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="input-1">Họ Và Tên</label>
            <input type="text" class="form-control" name="danhsachlophoc_name" id="input-1" placeholder="Vui lòng điền họ tên">
          </div>
          <div class="form-group">
            <label for="input-3">Giới tính</label>
            <select class="form-control" name="danhsachlophoc_gioitinh">
              <?php foreach ($gt as $key => $value) : ?>
                <option value="{{$value->id}}">{{$value->gender_name}}</option>
              <?php endforeach ?>

            </select>
          </div>
          <div class="form-group">
            <label for="input-3">Môn Dạy</label><br>

            <?php foreach ($monhoc as $key => $value) : ?>
              <input type="checkbox" value="{{$value->id}}" name="danhsachlophoc_monhoc[]">
              <label for="vehicle1">{{$value->monday_name}}</label>
            <?php endforeach ?>

          </div>

          <div class="form-group">
            <label for="input-3">Lớp Dạy</label><br>

            <?php foreach ($lophoc as $key => $value) : ?>
              <input type="checkbox" value="{{$value->id}}" name="danhsachlophoc_lophoc[]">
              <label for="vehicle1">{{$value->lopday_name}}</label>
            <?php endforeach ?>

          </div>

          <div class="form-group">
            <label for="input-3">Thứ Dạy</label>

            <?php foreach ($thuhoc as $key => $value) : ?>
              <input type="checkbox" value="{{$value->id}}" name="danhsachlophoc_thuhoc[]">
              <label for="vehicle1">{{$value->thuday_name}}</label>
            <?php endforeach ?>

          </div>

          <div class="form-group">
            <label for="input-1">Địa Chỉ</label>
            <input type="text" class="form-control" name="danhsachlophoc_diachi" id="input-1" placeholder="Vui lòng điền địa chỉ">
          </div>
          <div class="form-group">
            <label for="input-1">Lương</label>
            <input type="text" class="form-control" name="danhsachlophoc_luong" id="input-1" placeholder="vui lòng diền lương">
          </div>
          <div class="form-group">
            <label for="input-1">Số Buổi</label>
            <input type="text" class="form-control" name="danhsachlophoc_sobuoi" id="input-1" placeholder="vui lòng điền số buổi trong tuần">
          </div>
          <div class="form-group">
            <label for="input-1">Thời Gian</label>
            <input type="text" class="form-control" name="danhsachlophoc_thoigian" id="input-1" placeholder="vui lòng diền thời gian dạy">
          </div>
          <div class="form-group">
            <label for="input-1">Yêu Cầu</label>
            <input type="text" class="form-control" name="danhsachlophoc_yeucau" id="input-1" placeholder="Vui lòng điền yêu cầu mong muốn gia sư">
          </div>
          <div class="form-group">
            <label for="input-1">Liên Hệ</label>
            <input type="text" class="form-control" name="danhsachlophoc_lienhe" id="input-1" placeholder="vui lòng điền số điện thoại">
          </div>

          <div class="form-group">
            <button type="submit" name='themgiasu' class="btn btn-light px-5"><i class="icon-lock"></i> Thêm Lớp Học</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
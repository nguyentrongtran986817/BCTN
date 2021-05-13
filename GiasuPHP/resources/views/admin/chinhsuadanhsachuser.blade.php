@extends('admin')
@section('content')

<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">CẬP NHẬT USER</div>

        <hr>
        <form role="form" action="{{URL::to('/update_danhsachuser/'.$csdsus->danhsachuser_id)}}" method="post">
          @csrf
          <div class="form-group">
            <label for="input-1">Họ Và Tên</label>
            <input type="text" class="form-control" value="{{$csdsus->danhsachuser_name}}" name="danhsachuser_name" id="input-1" placeholder="Vui lòng điền họ và tên">
          </div>
          <div class="form-group">
            <label for="input-1">Email</label>
            <input type="email" class="form-control" value="{{$csdsus->email}}" name="email" id="input-1" placeholder="Vui lòng điền email">
          </div>
          <div class="form-group">
            <label for="input-1">Password</label>
            <input type="password" class="form-control" value="{{$csdsus->password}}" name="password" id="input-1" placeholder="Điền password">
          </div>
          <div class="form-group">
            <label for="input-3">Giới tính</label>
            <select class="form-control" name="themuser_gender">
              
              <?php foreach ($gt as $key => $gioitinh) : ?>
                                @if($csdsus->gender == $gioitinh->id)
                                    <option selected value="{{$gioitinh->id}}">{{$gioitinh->name}}</option>
                                @endif
                                    <option value="{{$gioitinh->id}}">{{$gioitinh->name}}</option>
                            <?php endforeach ?>

            </select>
          </div>
          <div class="form-group">
            <label for="input-3">Ngày Sinh</label>
            <input type="date" class="form-control" value="{{$csdsus->birth}}" name="birth" id="input-3" placeholder="Vui lòng điền năm sinh">
          </div>
          <div class="form-group">
            <label for="input-3">Địa chỉ</label>
            <input type="text" class="form-control" value="{{$csdsus->address}}" name="address" id="input-3" placeholder="Vui lòng điền địa chỉ">
          </div>
          <div class="form-group">
            <label for="input-3">Số điện thoại</label>
            <input type="text" class="form-control" value="{{$csdsus->phone}}" name="phone" id="input-3" placeholder="Vui lòng điền số điện thoại">
          </div>
          <div class="form-group">
            <button type="submit" name='themguser' class="btn btn-light px-5"><i class="icon-lock"></i>Cập Nhật User</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
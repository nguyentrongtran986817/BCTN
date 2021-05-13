@extends('admin')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh Sách User </h5>
        <div class="row">
        <h5><button class="custom-btn btn-6"><span><i class="fas fa-plus-square"></i><a href="{{URL::to('/themuser')}}">Thêm User</a></span></button></h5>
        <form class="search-barr">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>         
            </div>
        <?php
        $message = Session::get('message');
        if ($message) {
          echo $message;
          Session::put('message', null);
        }
        ?>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Họ Và Tên</th>
                <th scope="col">Giới Tính</th>
                <th scope="col">Ngày Sinh</th>
                <th scope="col">Số Điện Thoại</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($all_danhsachuser as $key => $value) : ?>
                <tr>
                  <th scope="row">{{$value->danhsachuser_id}}</th>
                  <td>{{$value->danhsachuser_name}}</td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->birth}}</td>
                  <td>{{$value->phone}}</td>
                  <td><a href="{{URL::to('/chinhsuadanhsachuser/'.$value->danhsachuser_id)}}"><button class="custom-btn btn-6 abc"><span><i class="fas fa-edit"></i>Chỉnh Sửa</span></button>
                      <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ?')" href="{{URL::to('/remove_danhsachuser/'.$value->danhsachuser_id)}}"><button class="custom-btn btn-6 abc"><span><i class="fas fa-trash-alt"></i>Xóa</span></button></td></a>

                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
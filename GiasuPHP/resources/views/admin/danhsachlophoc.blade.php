@extends('admin') @section('content') <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh Sách Lớp Học </h5>
        <div class="row">  
                </span></button></h5> 
                <h5><button class="custom-btn btn-6"><span><i class="fas fa-plus-square"></i>
                <a href="{{URL::to('/themlophoc')}}">Thêm Lớp Học</a>
                </span></button></h5>
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
                  ?> <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Họ Và Tên</th>
                <th scope="col">Giới Tính</th>
                <th scope="col">Lớp Dạy</th>
                <th scope="col">Môn Dạy</th>
                <th scope="col">Lương</th>
                <th scope="col">Yêu Cầu</th>
                <th scope="col">Chức năng</th>
              </tr>
            </thead>
            <tbody> <?php foreach ($all_danhsachlophoc as $key => $value) : ?> <tr>
                  <th scope="row">{{$value->danhsachlophoc_id}}</th>
                  <td>{{$value->danhsachlophoc_name}}</td>
                  <td>{{$value->gender_name}}</td>
                  <td>
                    @foreach ($all_lopday as $lopday)
                    <?php
                      $a = explode(',', $value->danhsachlophoc_lophoc);
                      for ($i = 0; $i < count($a); $i++) {
                        if ($a[$i] == $lopday->id) {
                    ?> <h6>{{$lopday->lopday_name}}</h6> <br>
                    <?php
                        }
                      }
                    ?> @endforeach </td>
                  <td >
                    @foreach ($all_monday as $monhoc)
                    <?php
                      $a = explode(',', $value->danhsachlophoc_monhoc);
                      for ($i = 0; $i < count($a); $i++) {
                        if ($a[$i] == $monhoc->id) {
                    ?> <h6>{{$monhoc->monday_name}}</h6> <br>
                    <?php
                        }
                      }
                    ?> @endforeach </td>
                  <td>{{$value->danhsachlophoc_luong}}</td>
                  <td>{{$value->danhsachlophoc_yeucau}}</td>
                  <td><a href="{{URL::to('/chinhsuadanhsachlophoc/'.$value->danhsachlophoc_id)}}"><button class="custom-btn btn-6 abc"><span><i class="fas fa-edit"></i>Chỉnh Sửa</span></button>
                      <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ?')" href="{{URL::to('/remove_danhsachlophoc/'.$value->danhsachlophoc_id)}}"><button class="custom-btn btn-6 abc"><span><i class="fas fa-trash-alt"></i>Xóa</span></button></a></td>
                </tr> <?php endforeach ?> </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div> @endsection
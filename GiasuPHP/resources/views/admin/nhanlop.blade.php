@extends('admin') @section('content') <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
      
        <h5 class="card-title">Thanh toán </h5>
         <div class="table-responsive">
         
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Mã lớp</th>
                <th scope="col">Tên gia sư</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Tên học sinh</th>
                <th scope="col">Lương</th>
                <th scope="col">Trạng thái</th>
              </tr>
            </thead>
            <tbody> <?php foreach ($nhanlop as $key => $value) : ?> <tr>
                  <th scope="row">{{$value->nhanlop_malop}}</th>
                  <td>{{$value->nhanlop_ten}}</td>
                  <td>{{$value->nhanlop_sdt}}</td>
                  <td>{{$value->nhanlop_name}}</td>
                  <td>{{$value->nhanlop_luong}}</td>
                  <td>
                    @if($value->nhanlop_trangthai == 0)
                      <p style='color:#FF0606'>Chưa thanh toán</p>
                    @endif
                    @if($value->nhanlop_trangthai == 1)
                      <p style='color:#58FA82'>Đã thanh toán</p>
                    @endif
                    </td>
                  <td><h6>
                  <button type='submit' name='capnhatthanhtoan' class="custom-btn btn-6"><span><a href="{{URL::to('/update_nhanlop/'.$value->nhanlop_id)}}">Thanh toán</a></span></button>
                 
                  <button class="custom-btn btn-6"><span><a href="{{URL::to('/inhoadon/'.$value->giasu_id)}}" target="_blank">In hóa đơn</a></span></button>
                  </h6></td>
                  
                </tr> <?php endforeach ?> </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
 @endsection
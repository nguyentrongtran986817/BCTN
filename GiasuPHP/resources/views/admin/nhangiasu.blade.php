@extends('admin') @section('content') <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
      
        <h5 class="card-title">Thanh toán </h5>
         <div class="table-responsive">
         
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Mã gia sư</th>
                <th scope="col">Tên gia sư</th>
                <th scope="col">Tên học sinh</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Số lượng học sinh</th>
                <th scope="col">Trạng thái</th>
              </tr>
            </thead>
            <tbody> <?php foreach ($nhangs as $key => $value) : ?> <tr>
                  <th scope="row">{{$value->nhangs_mags}}</th>
                  <td>{{$value->nhangs_ten}}</td>
                  <td>{{$value->nhangs_hoten}}</td>
                  <td>{{$value->nhangs_sdt}}</td>
                  <td>{{$value->nhangs_slhs}}</td>
                  <td>
                    @if($value->nhangs_trangthai == 0)
                      <p style='color:#FF0606'>Chưa thanh toán</p>
                    @endif
                    @if($value->nhangs_trangthai == 1)
                      <p style='color:#58FA82'>Đã thanh toán</p>
                    @endif
                    </td>
                  <td><h6>
                  <button type='submit' name='capnhatthanhtoan' class="custom-btn btn-6"><span><a href="{{URL::to('/update_nhangiasu/'.$value->id)}}">Thanh toán</a></span></button>
                 
                  <button class="custom-btn btn-6"><span><a href="#" target="_blank">In hóa đơn</a></span></button>
                  </h6></td>
                  
                </tr> <?php endforeach ?> </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
 @endsection
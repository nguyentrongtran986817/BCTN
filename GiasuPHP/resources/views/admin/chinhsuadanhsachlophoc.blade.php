@extends('admin')
@section('content')

<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">CẬP NHẬT LỚP HỌC</div>
        <?php
        $message = Session::get('message');
        if ($message) {
          echo $message;
          Session::put('message', null);
        }
        ?>
        <hr>

        <form role="form" action="{{URL::to('/update_danhsachlophoc/'.$csdslh->danhsachlophoc_id)}}" method="post">
          @csrf
          <div class="form-group">
            <label for="input-1">Họ Và Tên</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_name}}" name="danhsachlophoc_name" id="input-1" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="input-3">Giới tính</label>
            <select class="form-control" name="danhsachlophoc_gioitinh">
              
              <?php foreach ($gt as $key => $gioitinh) : ?>
                                @if($csdslh->danhsachlophoc_gioitinh == $gioitinh->id)
                                    <option selected value="{{$gioitinh->id}}">{{$gioitinh->gender_name}}</option>
                                @endif
                                    <option value="{{$gioitinh->id}}">{{$gioitinh->gender_name}}</option>
                            <?php endforeach ?>

            </select>
          </div>
          <div class="form-group">
            <label for="input-3">Môn Dạy</label>
              <?php foreach ($monhoc as $key => $mon) : ?>
                               <input type="checkbox"
                            <?php
                                $a = explode(',', $csdslh->danhsachlophoc_monhoc);
                                for($i=0; $i<count($a); $i++)
                                {
                                    if($a[$i] == $mon->id){
                                ?>
                                    checked
                                <?php
                                }
                                }
                                ?>
                             value="{{$mon->id}}" name="danhsachlophoc_monhoc[]">
                            <label>{{$mon->monday_name}}</label>
                           
                        <?php endforeach ?>

                    </div>
                <div class="form-group">
                        <label for="input-3">Lớp Dạy :</label><br>
                        <?php foreach ($lophoc as $key => $lop) : ?>
                           

                            <input type="checkbox"
                            <?php
                                $a = explode(',', $csdslh->danhsachlophoc_lophoc);
                                for($i=0; $i<count($a); $i++)
                                {
                                    if($a[$i] == $lop->id){
                                ?>
                                    checked
                                <?php
                                }
                                }
                                ?>
                             value="{{$lop->id}}" name="danhsachlophoc_lophoc[]">
                            <label>{{$lop->lopday_name}}</label>
                           
                        <?php endforeach ?>

                    </div>
          <div class="form-group">
            <label for="input-3">Thứ Dạy</label>
             <?php foreach ($thuhoc as $key => $thu) : ?>
                <input type="checkbox"
                            <?php
                                $a = explode(',', $csdslh->danhsachlophoc_thuhoc);
                                for($i=0; $i<count($a); $i++)
                                {
                                    if($a[$i] == $thu->id){
                                ?>
                                    checked
                                <?php
                                }
                                }
                                ?>
                             value="{{$thu->id}}" name="danhsachlophoc_thuhoc[]">
                            <label>{{$thu->thuday_name}}</label>
                           
                        <?php endforeach ?>

                    </div>



          <div class="form-group">
            <label for="input-1">Địa Chỉ</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_diachi}}" name="danhsachlophoc_diachi" id="input-1" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="input-1">Lương</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_luong}}" name="danhsachlophoc_luong" id="input-1" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="input-1">Số Buổi</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_sobuoi}}" name="danhsachlophoc_sobuoi" id="input-1" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="input-1">Thời Gian</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_thoigian}}" name="danhsachlophoc_thoigian" id="input-1" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="input-1">Yêu Cầu</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_yeucau}}" name="danhsachlophoc_yeucau" id="input-1" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="input-1">Liên Hệ</label>
            <input type="text" class="form-control" value="{{$csdslh->danhsachlophoc_lienhe}}" name="danhsachlophoc_lienhe" id="input-1" placeholder="Enter Your Name">
          </div>

          <div class="form-group">
            <button type="submit" name='capnhatlophoc' class="btn btn-light px-5"><i class="icon-lock"></i>Cập Nhật Lớp Học</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
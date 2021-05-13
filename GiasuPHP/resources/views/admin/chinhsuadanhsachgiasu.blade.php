@extends('admin')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">CẬP NHẬT GIA SƯ</div>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
                <hr>

                <form role="form" action="{{URL::to('/update_danhsachgiasu/'.$csdsgs->danhsachgiasu_id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Họ Và Tên</label>
                        <input type="text" class="form-control" value="{{$csdsgs->danhsachgiasu_ten}}" name="themgiasu_ten" id="input-1" >
                    </div>
                    <div class="form-group">
                        <label for="input-1">Số điện thoại</label>
                        <input type="number" class="form-control" value="{{$csdsgs->danhsachgiasu_sdt}}" name="themgiasu_sdt" id="input-1" >
                    </div>
                    <div class="form-group">
                        <label for="input-1">Email</label>
                        <input type="email" class="form-control" value="{{$csdsgs->danhsachgiasu_email}}" name="themgiasu_email" id="input-1" >
                    </div>
                    <div class="form-group">
                        <label for="input-1">Password</label>
                        <input type="password" class="form-control" name="themgiasu_password" id="input-1" placeholder="Điền password">
                    </div>
                    <div class="form-group">
                        <label for="input-2">Hình Ảnh</label>
                        <div>
                            <img src="{{asset('/uploads/danhsachgiasu/'.$csdsgs->danhsachgiasu_hinhanh)}}" width='100px' alt="">
                            <input type="file" class="form-control" name="danhsachgiasu_hinhanh" id="input-2">
                            <input type="hidden" name="danhsachgiasu_hinhanh_old" value="{{$csdsgs->danhsachgiasu_hinhanh}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-3">Năm Sinh</label>
                        <input type="date" class="form-control" value="{{$csdsgs->danhsachgiasu_ngaysinh}}" name="themgiasu_ngaysinh" id="input-3">
                    </div>
                    <div class="form-group">
                        <label for="input-3">Hiện Là :</label><br>
                        <?php foreach ($loaigs as $key => $loai) : ?>
                            @if($csdsgs->danhsachgiasu_hienla == $loai->id)
                            <input value="{{$loai->id}}" type="checkbox" name="themgiasu_hienla[]" checked>
                            <label>{{$loai->hienla_name}}</label>
                            @else
                            <input value="{{$loai->id}}" type="checkbox" name="themgiasu_hienla[]">
                            <label>{{$loai->hienla_name}}</label>
                            @endif
                        <?php endforeach ?>
                    </div>

                    <div class="form-group">
                        <label for="input-3">Lớp Dạy :</label><br>
                        <?php foreach ($lopgs as $key => $lop) : ?>
                           

                            <input type="checkbox"
                            <?php
                                $a = explode(',', $csdsgs->danhsachgiasu_lopday);
                                for($i=0; $i<count($a); $i++)
                                {
                                    if($a[$i] == $lop->id){
                                ?>
                                    checked
                                <?php
                                }
                                }
                                ?>
                             value="{{$lop->id}}" name="themgiasu_lopday[]">
                            <label>{{$lop->lopday_name}}</label>
                           
                        <?php endforeach ?>

                    </div>
                    <div class="form-group">
                        <label for="input-3">Môn Dạy :</label><br>

                        <?php foreach ($mongs as $key => $mon) : ?>
                        <input  type="checkbox"
                            <?php
                                $a = explode(',', $csdsgs->danhsachgiasu_monday);
                                for($i=0; $i<count($a); $i++)
                                {
                                    if($a[$i] == $mon->id){
                                ?>
                                    checked
                                <?php
                                }
                                }
                                ?>
                             value="{{$mon->id}}" name="themgiasu_monday[]">
                            <label>{{$mon->monday_name}}</label>
                           

                        <?php endforeach ?>

                    </div>

                    <div class="form-group">
                        <label for="input-3">Ngày Dạy :</label><br>
                        <?php foreach ($ngaygs as $key => $ngay) : ?>
                            <input  type="checkbox"
                            <?php
                                $a = explode(',', $csdsgs->danhsachgiasu_ngayday);
                                for($i=0; $i<count($a); $i++)
                                {
                                    if($a[$i] == $ngay->id){
                                ?>
                                    checked
                                <?php
                                }
                                }
                                ?>
       
                             value="{{$ngay->id}}" name="themgiasu_ngayday[]" >
                            <label>{{$ngay->ngayday_name}}</label>
                        <?php endforeach ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" name='capnhatgiasu' class="btn btn-light px-5"><i class="icon-lock"></i> Cập Nhật Gia Sư</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
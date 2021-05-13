@extends('admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="row">
                    <div class="col-sm-12">
                        <hr>
                        <button class="btn btn-primary"><a href="/download-pdf">Export PDF<a></button>
                        <hr>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>INVOICE</h2>
                                            <p>giasutn@gmail.com</p>
                                            <p>+84 359686971</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h1 class="h1-logo">
                                                <img src="{{asset('backend/images/logo.png')}}" alt="logo icon">
                                            </h1>
                                        </div>
                                    </div>
                                    <h3 class='notitle'>Hóa đơn thanh toán</h3><br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>Họ và tên :{{$gs->danhsachgiasu_ten}}</p>
                                            <p>Số điện thoại :{{$gs->danhsachgiasu_sdt}}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            @foreach ($all_hienla as $hienla)
                                            <?php
                                            $a = explode(',', $gs->danhsachgiasu_hienla);
                                            for ($i = 0; $i < count($a); $i++) {
                                                if ($a[$i] == $hienla->id) {
                                            ?>
                                                    <h6>Cấp bậc : {{$hienla->hienla_name}}</h6> <br>
                                            <?php
                                                }
                                            }
                                            ?>
                                            @endforeach

                                            <p>Email:{{$gs->danhsachgiasu_email}} </p>
                                        </div>
                                    </div><br> <br>
                                    <div class="row">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Nội dung</th>
                                                    <th scope="col">Lương </th>
                                                    <th scope="col">Thuế </th>
                                                    <th scope="col">Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($ihd as $key => $value) : ?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>
                                                            <h6>Nhận lớp của học sinh</h6>
                                                            <h6>{{$value->nhanlop_name}}</h6>
                                                        </td>
                                                        <td>{{$value->nhanlop_luong}}</td>
                                                        <td>35%</td>
                                                        <td>
                                                            <?php
                                                            $a = (int)($value->nhanlop_luong) * 35 / 100;

                                                            ?>
                                                            {{$a}}
                                                        <td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach ?>

                                        </table><br>
                                        <div class="row col-sm-12">
                                            <div class="container">
                                                <div class="col-m-4 total">
                                                    
                                                    <div>
                                                        <h6>Hình thức : 
                                                                @if($value->nhanlop_status == 0)
                                                                <h6>Chuyển khoản</h6>
                                                                @endif
                                                                @if($value->nhanlop_status == 1)
                                                                <h6>Tiền mặt</h6>
                                                                @endif
                                                            </h6>
                                                    </div>
                                                    <h6>Trạng thái : <span style="padding-left: 5.5%">
                                                            @if($value->nhanlop_trangthai == 0)
                                                            <h6 style='color:#FF0606'>Chưa thanh toán</h6>
                                                            @endif
                                                            @if($value->nhanlop_trangthai == 1)
                                                            <h6 style='color:#58FA82'>Đã thanh toán</h6>
                                                            @endif
                                                        </span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>

                                <div class='row' id='row'>
                                    <div class="col-sm-4">
                                        <h5>Người nhận</h5>
                                        <h6>(Ký và ghi rõ họ tên)</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5>Người nhận</h5>
                                        <h6>(Đóng dấu, ký và ghi rõ họ tên)</h6>
                                    </div>
                                </div><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .the-logo {
        color: #141414;
        font-weight: 700;
        font-size: 30px;
        padding: 0;
        display: inline-block;
    }

    .notitle {
        text-align: center;
    }

    .h1-logo {
        text-align: right;
        padding-top: 9%;
        padding-right: 9%;
    }

    .total {
        padding-left: 67%;
    }

    #row {
        text-align: end;
    }
</style>
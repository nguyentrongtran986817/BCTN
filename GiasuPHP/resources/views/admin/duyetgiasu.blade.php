@extends('admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Duyệt gia sư</h5>
                <br>
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
                                <th scope="col">Hình Ảnh</th>
                                <th scope="col">Năm Sinh</th>
                                <th scope="col">Cấp Bậc</th>
                                <th scope="col">Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody> <?php foreach ($all_danhsachgiasu as $key => $value) : ?> <tr>
                                    <th scope="row">{{$value->danhsachgiasu_id}}</th>
                                    <td>{{$value->danhsachgiasu_ten}}</td>
                                    <td>
                                        <img src="{{asset('/uploads/danhsachgiasu/'.$value->danhsachgiasu_hinhanh)}}" width='100px' alt="">
                                    </td>
                                    <td>{{$value->danhsachgiasu_ngaysinh}}</td>
                                    <td>
                                        @foreach ($all_hienla as $hienla)
                                        <?php
                                        $a = explode(',', $value->danhsachgiasu_hienla);
                                        for ($i = 0; $i < count($a); $i++) {
                                            if ($a[$i] == $hienla->id) {
                                        ?>
                                                <h6>{{$hienla->hienla_name}}</h6> <br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        @endforeach

                                    </td>
                                    <td><a href="{{URL::to('/duyetgiasubyid/'.$value->danhsachgiasu_id)}}"><button class="custom-btn btn-6 abc"><span><i class="fas fa-check"></i>Duyệt</span></button>
                                            <a onclick="return confirm('Bạn có chắc là không duyệt gia sư này ?')" href="{{URL::to('/kduyetgiasubyid/'.$value->danhsachgiasu_id)}}"><button class="custom-btn btn-6 abc"><span><i class="fas fa-times"></i>Không Duyệt</span></button>
                                </tr> <?php endforeach ?> </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div> @endsection
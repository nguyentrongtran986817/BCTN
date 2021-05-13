@extends('layout2')
@section('content')
<div class="col_c col_c2">
    <div class="newClass">
        <div class="gstt_form">
        </div>
@if(Session::has('ctgs'))
    <script>
        swal("Thành Công", "{!! Session::get('ctgs')!!}", "success", {
            button:"OK",
        })
    </script>
    @endif
        <div class="giasu_d">
            <?php foreach ($all_chitietgiasu as $key => $value) : ?>
                <div class="gs_item_l clearfix">
                    <div class="gs_item">
                        <div>
                            <img src="{{asset('/uploads/danhsachgiasu/'.$value->danhsachgiasu_hinhanh)}}" width='150px' alt="">
                            <span class="gs1">Mã số: </span><strong class="gs2">{{$value->danhsachgiasu_id}}</strong><br>
                            <span class="gs1">Gia sư: </span><strong class="gs3">{{$value->danhsachgiasu_ten}}</strong><br>
                            <span class="gs1">Năm sinh: </span><span class="gs4">{{$value->danhsachgiasu_ngaysinh}}</span><br>
                            <span class="gs1">Hiện là: </span><span class="gs4">{{$value->hienla_name}}</span><br>  
                            <span class="gs5th2"> 
                            Nhận dạy: <br>
                            @foreach ($all_lopday as $lopday)
                            <span class="c1" style="float:left">                               
                                <?php
                                $a = explode(',', $value->danhsachgiasu_lopday);
                                for ($i = 0; $i < count($a); $i++) {
                                    if ($a[$i] == $lopday->id) {
                                ?> <h6>{{$lopday->lopday_name}},</h6>
                                <?php
                                    }
                                }
                                ?>          
                            </span>
                             @endforeach
                            </span><br>
                            <span class="gs5th">
                                Các môn:<br>
                                @foreach ($all_monday as $monhoc)
                                    <span class="c1" style="float:left">
                                        <?php
                                        $a = explode(',', $value->danhsachgiasu_monday);
                                        for ($i = 0; $i < count($a); $i++) {
                                            if ($a[$i] == $monhoc->id) {
                                        ?> <p>{{$monhoc->monday_name}},</p>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </span>
                              
                                @endforeach
                                    </span><br>
                            <span class="gs9">
                                <font color="#343"><strong>Thông tin khác:</strong></font>&nbsp; 10 năm kinh nghiệm dạy kèm, 5 năm kinh nghiệm giao tiếp. Hiện là giảng viên đại học Giao Thông Vận Tải TPHCM
                            </span>
                        </div>
                        <p class="gs_buton">
                            <a href="{{URL::to('/chitietgiasu/'.$value->danhsachgiasu_id)}}" class="btn2" onclick="chonGiaSu('6428')">Chọn gia sư</a>
                        </p>
                    </div>
                <?php endforeach ?>



                <div class="lgs_page clearfix">
                    <p class="bg_txt2">Xem thêm gia sư</p>
                    <ul class="pgae_l pagination clearfix">
                        <li><a class="page-nav-act active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#" class="next">&gt;</a></li>
                    </ul>
                </div>
                <h2 class="gstt_bh">Quý phụ huynh liên hệ <font color="green"><strong>0973.412.721</strong></font> để được tư vấn tìm gia sư miễn phí</h2>
                </div>

        </div>
    </div>
    <form method="get" action="{{URL::to('/giasudachon')}}" id="form__giasu" class="fm NiceIt">
        @endsection
@extends('layout')
@section('content')

<div class="col_c">
    <div class="newClass">
    @if(Session::has('ctld'))
    <script>
        swal("Thành Công", "{!! Session::get('ctld')!!}", "success", {
            button:"OK",
        })
    </script>
    @endif

    @if(Session::has('eror'))
    <script>
        swal("Nhắc nhở", "{!! Session::get('eror')!!}", "error", {
            button:"OK",
        })
    </script>
    @endif
        <!--NOI DUNG  -->
        <h2 class="sh_b sh_b2">LỚP CẦN GIA SƯ</h2>


        <div class="newClass">
            <div class="class_list clearfix">
                <?php foreach ($all_danhsachcanlophoc as $key => $value) : ?>

                    <div class="item_c">
                        <div class="c_ttl">
                            LỚP CHƯA GIAO
                            <p class="percent">35%</p>
                            <p class="c_ms">MS<br>{{$value->danhsachlophoc_id}}</p>
                        </div>
                        <div class="c_content chuagiao">
                            Họ Và Tên Học Sinh: <span class="c1">{{$value->danhsachlophoc_name}}</span><br>
                            Giới Tính: <span class="c1">{{$value->gender_name}}</span><br>
                            <div>
                                Môn dạy:<br>
                                @foreach ($all_monday as $monhoc)
                                    <span class="c1" style="float:left">
                                        <?php
                                        $a = explode(',', $value->danhsachlophoc_monhoc);
                                        for ($i = 0; $i < count($a); $i++) {
                                            if ($a[$i] == $monhoc->id) {
                                        ?> <p>{{$monhoc->monday_name}},</p>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </span>
                              
                                @endforeach
                            </div><br>
                            <div> 
                            Lớp dạy: <br>
                            @foreach ($all_lopday as $lopday)
                            <span class="c1" style="float:left">                               
                                <?php
                                $a = explode(',', $value->danhsachlophoc_lophoc);
                                for ($i = 0; $i < count($a); $i++) {
                                    if ($a[$i] == $lopday->id) {
                                ?> <h6>{{$lopday->lopday_name}},</h6>
                                <?php
                                    }
                                }
                                ?>          
                            </span>
                             @endforeach
                            </div><br>
                            Mức lương: <span class="c3">{{number_format($value->danhsachlophoc_luong)}}<sup>đ</sup>/tháng</span><br>
                            Số buổi: <span class="c2">{{$value->danhsachlophoc_sobuoi}} buổi /tuần</span><br>
                            <div> 
                            Thời gian: <br>
                            @foreach ($all_thuday as $thuday)
                            <span class="c1" style="float:left">                               
                                <?php
                                $a = explode(',', $value->danhsachlophoc_thuhoc);
                                for ($i = 0; $i < count($a); $i++) {
                                    if ($a[$i] == $thuday->id) {
                                ?> <h6>{{$thuday->thuday_name}},</h6>
                                <?php
                                    }
                                }
                                ?>          
                            </span>
                             @endforeach
                            </div><br>
                            Yêu cầu: <span class="c2">{{$value->danhsachlophoc_yeucau}}</span><br>
                            Liên hệ: <span class="c2">{{$value->danhsachlophoc_lienhe}}</span>
                        </div>
                        <div class="social clearfix">
                            <ul>
                                <div class="addthis_inline_share_toolbox_ogy4" data-url="https://giasudatviet.com/nhan-lop/gia-su-bao-bai-lop-9-quan-3-ho-chi-minh-28360.html" data-title="Gia sư Báo Bài Lớp 9 Quận 3 Hồ Chí Minh"></div>
                            </ul>
                            <p class="more_y3"><a href="{{URL::to('/chitietlopday/'.$value->danhsachlophoc_id)}}">ĐĂNG KÝ DẠY</a></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="lgs_page clearfix">
                <p class="bg_txt2">Xem thêm lớp</p>
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
        </div>

    </div>
</div>

@endsection
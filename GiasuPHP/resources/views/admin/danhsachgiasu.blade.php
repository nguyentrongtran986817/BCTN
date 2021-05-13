@extends('admin') 
@section('content') 

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Danh Sách Gia Sư </h5>

            <div class="row">   
          
                 <h5><button class="custom-btn btn-6"><span><i class="fas fa-plus-square"></i>
                <a href="{{URL::to('/themgiasu')}}">Thêm Gia Sư</a>
                </span></button></h5>
            <form class="search-barr" action="{{route('seachgs')}}" method="POST" enctype="multipart/form-data"> 
                @csrf
              <input type="text" name="name" class="form-control" placeholder="Enter keywords">
              <a type='submit' ><i class="icon-magnifier"></i></a>
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



                                    <td><a href="{{URL::to('/chinhsuadanhsachgiasu/'.$value->danhsachgiasu_id)}}">
                                    <button class="custom-btn btn-6 abc">
                                    <span><i class="fas fa-edit"></i>Chỉnh Sửa</span>
                                    </button>
                                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ?')" href="{{URL::to('/remove_danhsachgiasu/'.$value->danhsachgiasu_id)}}">
                                            <button class="custom-btn btn-6 abc">
                                            <span><i class="fas fa-trash-alt"></i>Xóa</span>
                                            </button>
                                            </a>
                                </tr> <?php endforeach ?> </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var path = "{{route('seachgs')}}";
    $('input.typeahead').typeahead({
        source: function(name,process){
            return $.get(path,{tearm:name},function(data){
                return process(data);
            })
        }
    })
</script>
</div>
 @endsection
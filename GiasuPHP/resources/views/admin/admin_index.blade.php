@extends('admin')
@section('content')
<style>
.acb{
  text-align:center;
  color: red;
  padding-top: 20px;
  padding-bottom: 20px;

}
</style>
<div class='acb'>
<h4>Chào mừng bạn đến với trang admin</h4>
</div>
<div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Tổng số gia sư <span class="float-right"><i class="fas fa-chalkboard-teacher"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font"> 123<span class="float-right"> <i></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Tổng số lớp học <span class="float-right"><i class="fas fa-school"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">24 <span class="float-right"><i></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Tổng số user <span class="float-right"><i class="fas fa-graduation-cap"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">231 <span class="float-right"> <i></i></span></p>
                </div>
            </div>
            
        </div>
@endsection
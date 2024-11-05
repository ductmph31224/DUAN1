@extends('admins.master')
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Danh muc</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Input Type</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label">tên danh mục</label>
                                            <input type="text" id="ten_danh_muc" name="ten_danh_muc"
                                                class="form-control">                                           
                                        </div>
                                         <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label">mô tả danh mục</label>
                                            <input type="text" id="ten_danh_muc" name="mo_ta_danhh_muc"
                                                class="form-control">                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label ">trạng thái:</label>
                                            <div class="col-sm-10 mb-3 d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="trang_thai" type="radio" name="trang_thai"
                                                        id="gridRadios1" value="1">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        hiện thị
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="trang_thai" type="radio" name="trang_thai"
                                                        id="gridRadios2" value="0">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        ẩn
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="d-flex"><button type="submit" class="btn btn-primary">thêm mới</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
@section('js')
   
@endsection

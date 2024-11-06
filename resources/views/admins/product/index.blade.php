@extends('admins.master')
@section('content')
    <div class="content">
        <div class="container-xxl">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Product</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title mb-0 align-content-center">Danh sách Product</h5>
                            <a href="{{route('admins.products.create')}}" class="btn btn-success"><i
                                    data-feather="plus-square"></i>Thêm mới</a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">mã sản phẩm</th>
                                            <th scope="col">tên sản phẩm</th>
                                            <th scope="col">hình ảnh</th>
                                            <th scope="col">số lượng</th>
                                            <th scope="col">category_id</th>
                                            <th scope="col">publisher_id</th>
                                            <th scope="col">author_id </th>
                                            <th scope="col">giá sản phẩm</th>
                                            <th scope="col">giá khuyến mại</th>
                                            <th scope="col">ngày nhập</th>
                                            <th scope="col">hanh dong</th>
                                        </tr>
                                    </thead>
                                    <tbody>    

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>12</td>
                                                <td>
                                                   12
                                                </td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>
                                                    <a href=""><i
                                                            class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i></a>
                                                    <form action=""
                                                        method="POST" class="d-inline"
                                                        onsubmit="return comfirm('ban muon xoa a')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-white ">
                                                            <i
                                                                class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

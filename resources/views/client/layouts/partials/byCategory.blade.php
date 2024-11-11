@extends('client.layouts.master')
@section('content')

    <style>
        /* Căn giữa nội dung các ô trong bảng */
        .table td, .table th {
            vertical-align: middle;
            text-align: center;
        }
        /* Đặt khoảng cách giữa các nút trong cột hành động */
        .table .d-flex .btn {
            margin: 0 5px;
        }
    </style>

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
                            <h5 class="card-title mb-0 align-content-center">Danh Mục Sản Phẩm Này</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                    </div>
                                @endif
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Mã sản phẩm</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Tình trạng</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">ID Danh Mục</th>
                                            <th scope="col">Giá sản phẩm</th>
                                            <th scope="col">Giá khuyến mại</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->ma_san_pham }}</td>
                                                <td>{{ $item->ten_san_pham }}</td>
                                                <td>
                                                    <img src="{{ Storage::url($item->image) }}" alt="" width="100px">
                                                </td>
                                                <td class="{{ $item->so_luong == 0 ? 'text-danger' : 'text-success' }}">
                                                    {{ $item->so_luong == 0 ? 'Hết hàng' : 'Còn hàng' }}
                                                </td>
                                                <td>{{ $item->so_luong }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>{{ number_format($item->gia_san_pham, 0, '', '.') }} đ</td>
                                                <td>{{ number_format($item->gia_khuyen_mai, 0, '', '.') }} đ</td>
                                            </tr>
                                        @endforeach
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

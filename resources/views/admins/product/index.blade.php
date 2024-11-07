
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
                            <a href="{{ route('admins.products.create') }}" class="btn btn-success"><i
                                    data-feather="plus-square"></i>Thêm mới</a>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-babel="Close">
                                        </button>
                                    </div>
                                @endif
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">mã sản phẩm</th>
                                            <th scope="col">tên sản phẩm</th>
                                            <th scope="col">hình ảnh</th>
                                            <th scope="col">Tình trạng</th>
                                            <th scope="col">số lượng</th>
                                            <th scope="col">category_id</th>
                                            {{-- <th scope="col">publisher_id</th>
                                            <th scope="col">author_id </th> --}}
                                            <th scope="col">giá sản phẩm</th>
                                            <th scope="col">giá khuyến mại</th>
                                            <th scope="col">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($listProduct as $item)

                                            <tr>
                                                <th scope="row">{{ $item->id }}</th>
                                                <td>{{ $item->ma_san_pham }}</td>
                                                <td>{{ $item->ten_san_pham }}</td>
                                                <td>
                                                    <img src="{{ Storage::url($item->image) }}" alt=""
                                                        width="100px">
                                                </td>
                                                <td class="{{ $item->so_luong == 0 ? 'text-danger' : 'text-success' }}">
                                                    {{ $item->so_luong == 0 ? 'hiết hàng' : 'còn hàng' }}</td>
                                                </td>
                                                <td>{{ $item->so_luong }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                {{-- <td>{{$item->publisher->name}}</td>
                                                <td>{{$item->author->name}}</td> --}}
                                                <td>{{ number_format($item->gia_san_pham, 0, '', '.') }} đ</td>
                                                <td>{{ number_format($item->gia_khuyen_mai, 0, '', '.') }} đ</td>
                                                <td class="d-flex justify-content-start align-items-center">
                                                    <!-- Sửa -->
                                                    <a href="{{ route('admins.products.edit', $item->id) }}" class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="mdi mdi-pencil text-muted fs-14"></i>
                                                    </a>

                                                    <!-- Xóa -->
                                                    <form action="{{ route('admins.products.destroy', $item->id) }}" method="POST" class="d-inline me-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                                            <i class="mdi mdi-delete text-muted fs-14"></i>
                                                        </button>
                                                    </form>
                                                </td>
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

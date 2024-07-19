@extends('admin.layouts.master')
@section('title')
    {{ $data->title }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Quản lý tin /</span><span> {{ $data->title }}</span>
        </h4>

        <div class="app-ecommerce">
            <form action="{{ route('admin.news.update', $data->id) }}" enctype="multipart/form-data">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Xem tin</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <a href="{{ route('admin.news.index') }}" class="btn btn-info">Quay Lại</a>
                        {{-- <button type="submit" class="btn btn-primary">Cập Nhật</button> --}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <img class="rounded-2 " src="{{ Storage::url($data->image) }}" alt=""
                                        width="150px" height="150px">
                                    {{-- <label for="ecommerce-product-name">Cover</label> --}}
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"value="{{ $data->category->name }}" disabled>
                                    <label for="ecommerce-product-name">Loại tin</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"value="{{ $data->author->name }}" disabled>
                                    <label for="ecommerce-product-name">Người thêm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"value="{{ $data->title }}" disabled>
                                    <label for="ecommerce-product-name">Tiêu đề</label>
                                </div>
                                Nội dung
                                <textarea disabled class="form-control mb-3" name="" id="" cols="30" rows="5">{{ $data->content }}</textarea>

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"value="{{ $data->view }}" disabled>
                                    <label for="ecommerce-product-name">Lượt xem</label>
                                </div>
                                <label class="switch switch-success">
                                    {!! $data['is_active'] ? '<span class="badge bg-success">YES</span>' : '<span class="badge bg-danger">NO</span>' !!}
                                    <span class="switch-label">Kích Hoạt</span>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

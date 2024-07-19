@extends('admin.layouts.master')
@section('title')
    Thêm mới tin tức
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Quản lý tin /</span><span> Thêm mới</span>
        </h4>

        <div class="app-ecommerce">
            <form action="{{ route('admin.news.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Thêm mới loại tin</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="reset" class="btn btn-outline-secondary">Loại Bỏ</button>
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4 col-2">
                                    <select class="form-select text-center" name="catelogue_id">
                                        <option value="--Chọn loại tin--">-- Chọn loại tin --</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" placeholder="Tiêu đề" name="title"
                                        aria-label="Tên danh mục" required autofocus>
                                    <label for="ecommerce-product-name">Tiêu đề</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" placeholder="Nội dung" name="content"
                                        aria-label="Tên danh mục" required autofocus>
                                    <label for="ecommerce-product-name">Nội dung</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" placeholder="Name" name="image"
                                        aria-label="Tên danh mục" autofocus>
                                    <label for="ecommerce-product-name">Image</label>
                                </div>
                                <label class="switch switch-success">
                                    <input type="hidden" name="is_active" value="0" />
                                    <input type="checkbox" name="is_active" value="1" class="switch-input" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
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

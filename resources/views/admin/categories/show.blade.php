@extends('admin.layouts.master')
@section('title')
    {{ $data->name }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Quản lý loại tin /</span><span> {{ $data->name }}</span>
        </h4>

        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Xem loại tin</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-info">Quay Lại</a>
                    {{-- <button type="submit" class="btn btn-primary">Cập Nhật</button> --}}
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control"value="{{ $data->name }}" disabled>
                                <label for="ecommerce-product-name">Name</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <img class="rounded-2 " src="{{ Storage::url($data->cover) }}" alt="" width="50px"
                                    height="50px">
                                {{-- <label for="ecommerce-product-name">Cover</label> --}}
                            </div>
                            <label class="switch switch-success">
                                {!! $data['is_active'] ? '<span class="badge bg-success">YES</span>' : '<span class="badge bg-danger">NO</span>' !!}
                                <span class="switch-label">Kích Hoạt</span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

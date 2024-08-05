@extends('admin.layouts.master')
@section('title')
    {{ $data->name }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        @if (session()->has('success'))
            <div class="alert alert-success fw-bold">
                {{ session()->get('success') }}
            </div>
        @endif
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Quản lý thành viên /</span><span> {{ $data->name }}</span>
        </h4>

        <div class="app-ecommerce">
            <form action="{{ route('admin.members.update', $data->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Cập nhật thành viên</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <a href="{{ route('admin.members.index') }}" class="btn btn-info">Quay Lại</a>
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <select name="type" class="form-select w-25">
                                        <option value="admin">Admin</option>
                                        <option value="member">Member</option>
                                    </select>
                                    {{-- <label for="ecommerce-product-name">Cover</label> --}}
                                </div>
                                {{-- <label class="switch switch-success">
                                    <input type="hidden" name="is_active" value="0" />
                                    <input type="checkbox" name="is_active" value="1" class="switch-input"
                                        @if ($data['is_active']) checked @endif />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Kích Hoạt</span>
                                </label> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

@extends('admin.layouts.master')
@section('title')
    {{ $data->title }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Quản lý tin /</span><span> Cập nhật</span>
        </h4>
        @if (session()->has('success'))
            <div class="alert alert-success fw-bold">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="app-ecommerce">
            <form action="{{ route('admin.news.update', $data->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Cập nhật loại tin</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <a href="{{ route('admin.news.index') }}" class="btn btn-info">Quay Lại</a>
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4 col-4">
                                    <select class="form-select text-center" name="categorie_id">
                                        <option value="" disabled>-- Chọn loại tin --</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($data->categorie_id == $item->id) selected @endif>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="catelogue_id">Chọn loại tin</label>
                                </div>


                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" placeholder="Tiêu đề" name="title"
                                        value="{{ $data->title }}" aria-label="Tên danh mục" required autofocus>
                                    <label for="ecommerce-product-name">Tiêu đề</label>
                                </div>
                                <div>
                                    <label class="form-label">Nội dung
                                        <span class="text-muted">(Không bắt buộc)</span></label>
                                    <textarea class="form-control" name="content" id="content">
                                        {{ $data->content }}
                                    </textarea>
                                </div>

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" placeholder="Name" name="image"
                                        aria-label="Tên danh mục" autofocus>
                                    <img class="rounded-2 ms-3 mt-3" src="{{ Storage::url($data->image) }}" alt=""
                                        width="60px" height="60px">
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
                    <div class="col-12 col-lg-5">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="col-md-12 mb-4">
                                    <div class="form-floating form-floating-outline">
                                        <div class="select2-success">
                                            <select id="select2Success" name="tags[]" class="select2 form-select" multiple>
                                                @foreach ($data->tags as $item)
                                                    <option value="{{ $item->id }}" selected>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach

                                                @foreach ($tags as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label for="select2Success">Thẻ</label>
                                    </div>
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
@section('style-libs')
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/bootstrap-select/bootstrap-select.css" />
@endsection
@section('script-libs')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/tagify/tagify.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/bloodhound/bloodhound.js"></script>
    <script src="{{ asset('themes') }}/admin/js/forms-selects.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

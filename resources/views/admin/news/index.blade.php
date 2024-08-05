@extends('admin.layouts.master')

@section('title')
    Danh sách Loại Tin
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4>
            <span class="text-muted fw-light">Quản lý loại tin /</span> Danh sách
        </h4>
        @if (session()->has('success'))
            <div class="alert alert-success fw-bold">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card-header d-flex justify-content-end align-items-center mb-3">
            <a class="btn btn-primary" href="{{ route('admin.news.create') }}"><i class="mdi mdi-plus me-0 me-sm-1"></i>Thêm
                Loại Tin</a>
        </div>
        <form class="d-flex mb-3" method="GET" action="{{ route('admin.news.index') }}">
            <select class="form-select w-20" name="categorie_id">
                <option value="">Tất cả danh mục</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <input class="form-control w-20 ms-3" type="text" name="title" placeholder="Tìm kiếm">
            <button class="btn btn-primary ms-3" type="submit">Tìm kiếm</button>
        </form>
        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Ảnh</th>
                            <th>Loại tin</th>
                            <th>Trạng thái</th>
                            <th>Người thêm</th>
                            <th>Thẻ</th>
                            <th>Lượt xem</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ Str::words($item->title, 9, '...') }}</td>
                                <td>
                                    {!! Str::words($item->content, 5, '...') !!}
                                </td>
                                <td>
                                    <img class="rounded-2" src="{{ Storage::url($item->image) }}" alt=""
                                        width="50px" height="50px">
                                </td>
                                <td>{{ $item->categorie->name }}</td>
                                <td>
                                    {!! $item->is_active ? '<span class="badge bg-success">YES</span>' : '<span class="badge bg-danger">NO</span>' !!}
                                </td>
                                <td>{{ $item->author->name }}</td>
                                <td>
                                    @foreach ($item->tags as $tag)
                                        <span class="badge bg-info">{{ $tag->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $item->view }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Show"
                                            class="btn btn-info btn-sm me-2"
                                            href="{{ route('admin.news.show', $item->id) }}"><i
                                                class="mdi mdi-eye"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Update"
                                            class="btn btn-warning btn-sm me-2"
                                            href="{{ route('admin.news.edit', $item->id) }}"><i
                                                class="mdi mdi-pencil"></i></a>

                                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Bạn có muốn xóa không')">
                                                <i class="mdi mdi-delete-circle"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('style-libs')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('script-libs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                order: [
                    [0, 'desc']
                ],
                responsive: true,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
@endsection

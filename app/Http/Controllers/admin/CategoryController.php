<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    const PATH_VIEW = 'admin.categorys.';
    const PATH_UPLOAD = 'category';



    public function index()
    {
        $category = Category::query()->latest('id')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }


    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }


    public function store(Request $request)
    {
        // Lấy tất cả dữ liệu trừ cover
        $data = $request->except('cover');

        // Chưa chọn mặc định 0
        $data['is_active'] ??= 0;

        // Xử lí ảnh
        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
        }

        // Thêm mới
        Category::query()->create($data);

        // Quay về index
        return redirect()->route('admin.category.index');
    }

    public function show(string $id)
    {
        $data = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function edit(string $id)
    {
        $data = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }


    public function update(Request $request, string $id)
    {
        $category = Category::query()->findOrFail($id);

        // Lấy tất cả dữ liệu trừ cover
        $data = $request->except('cover');

        // Chưa chọn mặc định 0
        $data['is_active'] ??= 0;

        // Xử lí ảnh
        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
        }
        $CoverPath = $category->cover;

        // Cập nhật dữ liệu
        $category->update($data);

        // Xóa ảnh cũ
        if ($CoverPath && Storage::exists($CoverPath) && $CoverPath !== $category->cover) {
            Storage::delete($CoverPath);
        }

        return back();
    }

    public function destroy(string $id)
    {
        // Lấy dữ liệu
        $category = Category::query()->findOrFail($id);

        // Xóa
        $category->delete();

        // Xóa ảnh nếu có
        if ($category->cover && Storage::exists($category->cover)) {
            Storage::delete($category->cover);
        }

        return back();
    }
}

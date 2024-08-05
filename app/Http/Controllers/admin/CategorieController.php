<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{
    const PATH_VIEW = 'admin.categories.';
    const PATH_UPLOAD = 'categorie';



    public function index()
    {
        $categories = Categorie::query()->latest('id')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
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
        Categorie::query()->create($data);

        // Quay về index
        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Thêm mới thành công');
    }

    public function show(string $id)
    {
        $data = Categorie::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function edit(string $id)
    {
        $data = Categorie::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }


    public function update(Request $request, string $id)
    {
        $categorie = Categorie::query()->findOrFail($id);

        // Lấy tất cả dữ liệu trừ cover
        $data = $request->except('cover');

        // Chưa chọn mặc định 0
        $data['is_active'] ??= 0;

        // Xử lí ảnh
        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::put(self::PATH_UPLOAD, $request->file('cover'));
        }
        $CoverPath = $categorie->cover;

        // Cập nhật dữ liệu
        $categorie->update($data);

        // Xóa ảnh cũ
        if ($CoverPath && Storage::exists($CoverPath) && $CoverPath !== $categorie->cover) {
            Storage::delete($CoverPath);
        }

        return back()->with('success', 'Cập nhật thành công');
    }

    public function destroy(string $id)
    {
        // Lấy dữ liệu
        $categorie = Categorie::query()->findOrFail($id);

        // Xóa
        $categorie->delete();

        // Xóa ảnh nếu có
        if ($categorie->cover && Storage::exists($categorie->cover)) {
            Storage::delete($categorie->cover);
        }

        return back()->with('success', 'Xóa thành công');
    }
}

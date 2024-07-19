<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class NewController extends Controller
{

    const PATH_VIEW = 'admin.news.';
    const PATH_UPLOAD = 'news';

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::query()->get();

        // Lấy dữ liệu từ request
        $category_Id = $request->input('catelogue_id');

        $query = News::query()->with('category', 'author')->latest('id');

        // lọc theo danh mục
        if ($category_Id) {
            $query->where('catelogue_id', $category_Id);
        }

        // hiện thị khi đã lọc
        $news = $query->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('news', 'categories'));
    }



    public function search(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('catelogue_id');
        $data = Category::where('name', 'like', '%' . $search . '%')
            ->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::query()->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // Lấy tất cả dữ liệu trừ image
        $data = $request->except('image');

        // Chưa chọn mặc định 0
        $data['is_active'] ??= 0;
        $data['user_id'] = 1;
        $data['slug'] = Str::slug($data['title']);
        // Xử lí ảnh
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

        // Thêm mới
        News::query()->create($data);

        // Quay về index
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = News::query()->with('category', 'author')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::query()->get();
        $data = News::query()->with('category', 'author')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::query()->findOrFail($id);

        // Lấy tất cả dữ liệu trừ image
        $data = $request->except('image');

        // Chưa chọn mặc định 0
        $data['is_active'] ??= 0;

        // Xử lí ảnh
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }
        $imagePath = $news->image;

        // Cập nhật dữ liệu
        $news->update($data);

        // Xóa ảnh cũ
        if ($imagePath && Storage::exists($imagePath) && $imagePath !== $news->image) {
            Storage::delete($imagePath);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Lấy dữ liệu
        $new = News::query()->findOrFail($id);

        // Xóa
        $new->delete();

        // Xóa ảnh nếu có
        if ($new->cover && Storage::exists($new->cover)) {
            Storage::delete($new->cover);
        }

        return back();
    }
}

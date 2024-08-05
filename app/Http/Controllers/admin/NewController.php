<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $categories = Categorie::query()->get();

        $query = News::query()->with('categorie', 'author')->latest('id');

        // lọc theo danh mục
        if ($request->categorie_id) {
            $query->where('categorie_id', $request->categorie_id);
        }
        if ($request->title) {
            $query->where('title', $request->title);
        }

        // hiện thị khi đã lọc
        $news = $query->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('news', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::query()->get();
        $tags = Tag::query()->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                // dd($request->tag);
                // Lấy tất cả dữ liệu trừ image
                $data = $request->except('image');

                // Chưa chọn mặc định 0
                $data['is_active'] ??= 0;
                $data['user_id'] = Auth::id();
                $data['slug'] = Str::slug($data['title']);
                // Xử lí ảnh
                if ($request->hasFile('image')) {
                    $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
                }

                // Thêm mới
                $new = News::query()->create($data);

                $new->tags()->sync($request->tags);

            }, 3);
            // Quay về index
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Thêm mới thành công!');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = News::query()->with('categorie', 'author')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Categorie::query()->get();
        $tags = Tag::query()->get();
        $data = News::query()->with('categorie', 'author', 'tags')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
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

                $news->tags()->sync($request->tags);
                // Xóa ảnh cũ
                if ($imagePath && Storage::exists($imagePath) && $imagePath !== $news->image) {
                    Storage::delete($imagePath);
                }

            }, 3);
            return back()
                ->with('success', 'Cập nhật thành công!');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
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

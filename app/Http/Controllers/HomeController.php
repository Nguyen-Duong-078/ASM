<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const PATH_VIEW = 'client.news.';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = News::query()->with('author', 'categorie', 'tags')->latest('id')->limit(3)->get();
        $popular = News::query()->with('author', 'categorie', 'tags')->inRandomOrder()->first();
        $topView = News::query()->with('author', 'categorie', 'tags')->orderByDesc('view')->first();
        $tag = Tag::query()->get();
        $recently = News::query()->with('author', 'categorie', 'tags')->latest('id')->get();
        return view('client.home', compact('data', 'popular', 'topView', 'tag', 'recently'));
    }

    public function new_detail(string $id)
    {
        $data = News::query()->with('author', 'categorie')->findOrFail($id);
        $sessionKey = 'news_' . $id . '_viewed';
        if (!session()->has($sessionKey)) {
            // Tăng số lượt xem và đặt session để ngăn việc tăng lại
            $data->increment('view');
            session([$sessionKey => true]);
        }
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function popular(string $id)
    {
        $data = News::query()
            ->with('author', 'categorie', 'tags')
            ->findOrFail($id);
        $sessionKey = 'news_' . $id . '_viewed';
        if (!session()->has($sessionKey)) {
            // Tăng số lượt xem và đặt session để ngăn việc tăng lại
            $data->increment('view');
            session([$sessionKey => true]);
        }
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function getForMenu()
    {
        $categories = Categorie::query()->get();
        return $categories;
    }

    public function showCategorieNews($id)
    {
        $categorie = Categorie::query()->findOrFail($id);
        $news = News::query()->with('author', 'categorie', 'tags')->where('categorie_id', $categorie->id)->get();
        // dd($news->toArray());
        return view(self::PATH_VIEW . __FUNCTION__, compact('news', 'categorie'));
    }

    public function search(Request $request)
    {
        $query = News::query()->with('author', 'categorie', 'tags')->latest('id');

        if ($request->input('query')) {
            $query->where('title', 'LIKE', '%' . $request->input('query') . '%');
        }

        $news = $query->get();
        return view('client.news.searchNew', compact('news'));
    }
}

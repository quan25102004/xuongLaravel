<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $suckhoe = Post::query()
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->select('posts.created_at as max_created_at', 'c.name', 'posts.title', 'image', 'posts.id')
            ->where('posts.category_id', 12)
            ->orderBy('posts.created_at', 'desc') // Sắp xếp theo thời gian giảm dần
            ->first(); // Lấy bản ghi đầu tiên (mới nhất)
        // dd($suckhoe->toArray());

        $trongnuoc = Post::query()
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->select('posts.created_at as max_created_at', 'c.name', 'posts.title', 'image', 'posts.id')
            ->where('posts.category_id', 13)
            ->orderBy('posts.created_at', 'desc') // Sắp xếp theo thời gian giảm dần
            ->first(); // Lấy bản ghi đầu tiên (mới nhất)

        $ngoainuoc = Post::query()
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->select('posts.created_at as max_created_at', 'c.name', 'posts.title', 'image', 'posts.id')
            ->where('posts.category_id', 14)
            ->orderBy('posts.created_at', 'desc') // Sắp xếp theo thời gian giảm dần
            ->first(); // Lấy bản ghi đầu tiên (mới nhất)

        $thethao = Post::query()
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->select('posts.created_at as max_created_at', 'c.name', 'posts.title', 'image', 'posts.id')
            ->where('posts.category_id', 15)
            ->orderBy('posts.created_at', 'desc') // Sắp xếp theo thời gian giảm dần
            ->first(); // Lấy bản ghi đầu tiên (mới nhất)

        $luotXemCao = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'image', 'view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->orderBy('view', 'desc')->limit(4)->get();
        // dd($luotXemCao->toArray());

        $newSucKhoe = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'image', 'view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('category_id', 12)
            ->orderBy('created_at', 'desc')->limit(1)->get();
        // dd($newSucKhoe->toArray());


        $listSucKhoe = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'image', 'view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('category_id', 12)
            ->orderBy('created_at', 'desc')->limit(5)->offset(1)->get();
        // dd($listSucKhoe->toArray());

        $listTrongNuoc = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'image', 'view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('category_id', 13)
            ->orderBy('created_at', 'desc')->limit(4)->get();

        $listTheThao = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'image', 'view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('category_id', 15)
            ->orderBy('created_at', 'desc')->limit(4)->get();

        $listCategories = Category::query()->get();
        // dd($listCategories->toArray());

        return view(
            'client.trangchu',
            compact('suckhoe', 'trongnuoc', 'ngoainuoc', 'thethao', 'luotXemCao', 'listSucKhoe', 'newSucKhoe', 'listTrongNuoc', 'listTheThao', 'listCategories')
        );
    }
    public function show($id)
    {
        $post = Post::query()

            ->join('post_tag as pt', 'posts.id', '=', 'pt.post_id')
            ->join('tags as t', 't.id', '=', 'pt.tag_id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')

            ->select('posts.title', 'posts.id', 'posts.content', DB::raw('GROUP_CONCAT(t.name) as tags'), 'posts.created_at', 'posts.view', 'posts.image', 'c.name')
            ->where('category_id', $id)
            ->groupBy('posts.id')
            ->limit(3)
            ->orderBy('created_at', 'desc')
            ->get();
        // dd($post->toArray());

        $listCategories = Category::query()->get();

        $luotXemCao = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'posts.image', 'posts.view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('category_id', $id)
            ->orderBy('view', 'desc')->limit(6)->get();
        // dd($luotXemCao->toArray());

        $randomPosts = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'posts.image', 'posts.view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->inRandomOrder()->take(4)->get();
        // dd($randomPosts->toArray());

        return view('client.tintuc', compact('post', 'listCategories', 'luotXemCao', 'randomPosts'));
    }
    public function chitiet($id)
    {
        $listCategories = Category::query()->get();

        $post = Post::query()

            ->join('post_tag as pt', 'posts.id', '=', 'pt.post_id')
            ->join('tags as t', 't.id', '=', 'pt.tag_id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')

            ->select('posts.title', 'c.name', 'posts.content', DB::raw('GROUP_CONCAT(t.name) as tags'), 'posts.created_at', 'posts.view', 'posts.image', 'posts.category_id')
            ->where('posts.id', $id)
            ->groupBy('posts.id', 'posts.title', 'posts.content', 'posts.created_at', 'posts.view', 'posts.image')
            ->first();
        // dd($post->toArray());

        $category_id = $post->category_id;
        $luotXemCao = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'posts.image', 'posts.view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('posts.category_id', $category_id)
            ->where('posts.id', '!=', $id)
            ->orderBy('view', 'desc')->limit(4)->get();
        // dd($luotXemCao->toArray());

        // dd($category_id);

        $lienquan = Post::query()
            ->select('posts.created_at', 'c.name', 'posts.title', 'posts.image', 'posts.view', 'posts.id')
            ->join('categories as c', 'c.id', '=', 'posts.category_id')
            ->where('posts.category_id', $category_id)
            ->where('posts.id', '!=', $id)
            ->inRandomOrder()->take(4)
            ->get();
        // dd($lienquan->toArray());


        return view('client.chitiet', compact('post', 'listCategories', 'luotXemCao', 'lienquan'));
    }
}

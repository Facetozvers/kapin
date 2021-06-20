<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    public function index(){
        $posts = Post::take(6)->get();
        return view('index', ['posts' => $posts]);
    }
    
    public function kegiatan(){
        return view('kegiatan');
    }

    public function contact(){
        return view('contact');
    }

    public function yayasan(){
        return view('yayasan');
    }

    public function smp(){
        return view('smp');
    }

    public function sma(){
        return view('sma');
    }

    public function smk(){
        return view('smk.index');
    }

    public function tkj(){
        return view('smk.tkj');
    }

    public function titl(){
        return view('smk.titl');
    }

    public function tkr(){
        return view('smk.tkr');
    }

    public function tm(){
        return view('smk.tm');
    }

    public function multimedia(){
        return view('smk.multimedia');
    }

    public function blog(){
        $posts = Post::paginate(6);
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog-list', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags]);
    }

    public function kategori($kategori){
        $categories_id = Category::where('name', $kategori)->first()->id;
        $posts = Post::where('category_id', $categories_id)->where('deleted_at', NULL)->paginate(6);
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog-list', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags, 'nama_kategori' => $kategori]);
    }

    public function tag($tag){
        $tags_id = Tag::where('name', $tag)->first()->id;
        $posts = DB::table('post_tag')->join('posts', 'posts.id', '=', 'post_tag.post_id')->where('tag_id', '=', $tags_id)->where('deleted_at', NULL)->paginate(9);
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog-list', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags, 'nama_kategori' => $tag]);
    }
}

@extends('layouts.main')
@section('title', 'BLOG KAPIN')
@section('content')
<div class="container-fluid section tingkat-section mt-5">
  <h1 class="section-title text-center">Blog Kapin</h1>
  <p class="text-center">Anda dapat mendapatkan informasi terkini mengenai KAPIN lewat Blog Kapin</p>
  <div class="row">
    <div class="col-md-8">
   
        @isset($nama_kategori)
            <p>Kategori :<br> <strong style="font-size:20px">{{$nama_kategori}}</strong></p>
        @endisset
        <div class="row">
        @if ($posts->count()<=0)
        <p class="section-title text-center" style="margin:auto">Belum ada Post</p>
        @else
            @foreach($posts as $post)
            <div class="col-md-4 mt-3">
            <a class="blog-link" href="/blog/{{$post->url}}">
                <div class="card blog-card">
                    <img class="card-img-top" src="/images/posts/{{$post->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:17px">{{$post->title}}</h5>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        @endif
        </div>
        <nav class="d-flex justify-content-center mt-5">
            {{$posts->links()}}
        </nav>
    </div>
    <div class="col-md-4">
        <!-- Categories Widget -->
        <div class="card mt-4">
          <h5 class="card-header">Kategori</h5>
          <div class="card-body">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a class="blog-link" href="/blog/kategori/{{$category->name}}">{{$category->name}}</a>
                    </li>
                    </ul>
                </div>
                @endforeach
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <h5 class="card-header">Tags</h5>
          <div class="card-body">
            <div class="row">
                @foreach($tags as $tag)
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a class="blog-link" href="/blog/tag/{{$tag->name}}">{{$tag->name}}</a>
                    </li>
                    </ul>
                </div>
                @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
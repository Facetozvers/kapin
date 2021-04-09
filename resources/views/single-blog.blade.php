@extends('layouts.main')
@section('title', $post->title.' | BLOG KAPIN')
@section('metatags')
<!-- og meta tag -->
<meta property="og:title" content="{{$post->title}} | BLOG KAPIN">
<meta property="og:description" content="{{$post->description}}">
<meta property="og:image" content="/images/posts/{{$post->image}}">
<meta property="og:url" content="https://kapin.or.id/blog/{{$post->url}}">

<!-- twitter meta tag -->
<meta property="twitter:title" content="YPT KAPIN | Beranda">
<meta property="twitter:description" content="{{$post->description}}">
<meta property="twitter:image" content="/images/posts/{{$post->image}}">
<meta property="twitter:url" content="https://kapin.or.id/blog/{{$post->url}}">
@endsection
@section('content')
  <!-- Page Content -->
  <div class="container pt-3">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4 post-title">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead post-author">
          by {{$user->name}}
        </p>

        <hr>

        <!-- Date/Time -->
        <p>{{date('d F Y', strtotime($post->created_at))}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded blog-image" src="/images/posts/{{$post->image}}" alt="">

        <hr>

        <!-- Post Content -->
        {!! $post->content !!}
        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
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

          <!-- Latest Post -->
          <h5 class="">Latest Post</h5>
          <hr>
          @foreach($latest as $post)
          <a class="blog-link" href="/blog/{{$post->url}}">
            <div class="card mb-3" style="box-shadow: 1px 1px 10px #e5e5e5;">
              <img class="card-img-top" src="/images/posts/{{$post->image}}" alt="Card image cap">
              <div class="card-body">
                <strong class="card-title">{{$post->title}}</strong>
              </div>
            </div>
          </a>
          @endforeach
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection

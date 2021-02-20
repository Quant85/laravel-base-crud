@extends('layout.template')
@section('site-title')
    Arch Blog
@endsection

@section('page-title')
    Show Post
@endsection

@section('main')
  <div class="wrap">
    <button type="button" class="btn btn-light btn-ms"> 
      <a href="{{ route('posts.index') }}">Return Admin Panel Posts</a> 
    </button>
        <a class="card-link" href="/">
          <article class="blog-card">
            <img class="post-image" src="{{$post->img}}"/>
            <div class="article-details">
              <h2 class="post-title"><?php echo "{$post->title}";?></h2>
              <h3 class="post-subtitle"><?php echo " {$post->subtitle}" ;?></h3>
              <p class="post-description"><?php echo " {$post->body}" ;?></p>
            </div>
            <!-- /.article-details -->
          </article>
        </a>
  </div>
@endsection
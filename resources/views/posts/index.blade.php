@extends('layout.template')
@section('site-title')
    Arch Blog
@endsection

@section('page-title')
    Contacts Panel
@endsection

@section('header')
    @include('partial.navbar')
@endsection
@section('main')
  <main>
    <div class="row container">
      <div class="col-sm-12">
        <h1 class="display-3">Admin Panel Posts</h1>   
        <div>
          <a style="margin: 19px;" href="{{ route('posts.create')}}" class="btn btn-primary">New post</a>
        </div>          
        @foreach($posts as $post)
        <table class="table table-striped">
          <thead>
              <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>URL Img</td>
                <td>Body</td>
                <td colspan = 2>Actions</td>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->img}}</td>
                  <td>{{$post->body}}</td>
                  <td>
                      <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="{{ route('posts.show',$post->id)}}" class="btn btn-primary">Show</a>
                  </td>
                  <td>
                      <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                  </td>
              </tr>
            </tbody>
          </table>
          @endforeach
      <div>
    </div>
    <div class="col-sm-12">

      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>

  </main>
@endsection
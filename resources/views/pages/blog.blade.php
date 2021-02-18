@extends('layout.template')

@section('site-title')
    Arch Blog
@endsection

@section('page-title')
    Post
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
  <main>
    @include('partial.blog-card')
  </main>
@endsection
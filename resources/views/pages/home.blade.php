
@extends('layout.template')

@section('site-title')
    Arch Blog
@endsection

@section('page-title')
    Home
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    <main>
        {{-- <img class="main-img" src="{{asset('img/main.jpg')}}" alt=""> --}}
    </main>
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layout.head')
<body>
  @yield('header')
  @yield('main')
  @yield('footer')
</body>
</html>
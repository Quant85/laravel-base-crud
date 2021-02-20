<!DOCTYPE html>
<html lang="en">
  @include('layout.head')
  <body>
    @yield('header')
    <div class="container">
      @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  </body>
</html>

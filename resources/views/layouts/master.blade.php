<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <a href="/">Home</a>
      <a href="/blog">Blog</a>
    </header>
    <br>
    @yield('content')

    <br>
    <footer>
      <p> &copy; laravel ksl ubl | 2017 </p>
    </footer>
  </body>
</html>

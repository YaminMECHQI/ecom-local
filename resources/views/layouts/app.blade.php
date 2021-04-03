<!doctype html>
<html>

<head>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
  <div class="container">
    <nav class="mt-2 rounded navbar navbar-expand navbar-dark bg-primary">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ url('/products') }}">Products</a>
        </div>
    </nav>
    @yield('content')
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="vh-100">
  <div class="row min-vh-100">
    {{-- Menu --}}
    <div class="col-12 col-md-4 col-lg-3 col-xl-2 bg-dark text-white">
      <nav class="d-flex flex-column align-items-center text-white text-decoration-none">
        
        <a class="text-primary fw-bold text-decoration-none" href="/administration/"><h1 class="fs-4">Admin Dashboard</h1></a>
        <a class="text-white text-decoration-none fs-4" href="/administration/fruits">Fruit</a>
        <a class="text-white text-decoration-none fs-4" href="/administration/legumes">Legume</a>
      </nav>
    </div>
    {{-- body --}}
    <div class="col-12 col-md-8 col-lg-9 col-xl-2 d-flex flex-column align-items-center">
      @yield('content')
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
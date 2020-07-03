<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercosur</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/><!--AGREGUE !!! -->
  <!-- <link rel="stylesheet" type="text/css" href="bootstrap.css">-->
</head>
<body>
  <div class="container">
    @yield('main')<!--referencia que hace cuando este la seccion main-->
  <!--el MAIN esta en el "archivo create.blade.php" -->
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>

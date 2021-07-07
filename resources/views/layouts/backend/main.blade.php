<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Coretan Mahasiswa | Dashboard</title>
  <link rel="icon" href="{{asset('frontend/assets/img/logo/cm-150.png')}}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
 @include('layouts.backend.partial.navigation')

  <main style="margin-top: 58px">
    <div class="container pt-4">
  @yield('content')
    </div>
  </main>

  <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="{{asset('assets/js/admin.js')}}"></script>

</body>

</html>
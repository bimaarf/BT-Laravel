<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/dripicons/webfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/dripicons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
    <style>
        .com-text{
    white-space: pre-wrap;
      word-wrap: break-word;
}
    </style>
    <script>
function textKomen() {
  const masuk = document.getElementById('text');
  const detect = masuk.value.toUpperCase();
  const btnSend = document.getElementById("kirimKomen");

  if (detect.length < 1 || detect == null) {
  btnSend.style.backgroundColor = "#d1d1d1";
  btnSend.disabled=true;
  }else{
  btnSend.disabled=false;
  btnSend.style.backgroundColor = "#5186ff";
  }
}
</script> 
</head>

<body>
    <div id="app">
        @include('layouts.backend.partial.sidebar')
        
       

            <!-- <div class="page-content"> -->
                @yield('content')
            <!-- </div> -->

         <!-- footer -->
       
    </div>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
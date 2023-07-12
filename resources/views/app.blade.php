<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Blog</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="{{asset('js/axios.min.js')}}"></script>
</head>

<body class="box-border">

  @include('components.navbar')
  <div class="content-div">
    @yield('content')
  </div>
  @include('components.footer')



  <script src="{{asset('js/bootstrap.bundle.js')}}"></script>

</body>

</html>
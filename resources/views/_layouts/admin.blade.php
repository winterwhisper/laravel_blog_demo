<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <title>@yield('page_title') | Console</title>
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/skin-blue.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/global.css') }}">
  <!--[if lt IE 9]>
    <script src="{{ URL::asset('assets/javascript/html5shiv.min.js') }}</script>
    <script src="{{ URL::asset('assets/javascript/respond.js') }}"></script>
  <![endif]-->
</head>
<body class="skin-blue">
  <div class="wrapper">
    @include('partials.layouts.admin.top_bar')
    @include('partials.layouts.admin.side_bar')
    <div class="content-wrapper">
      <section class="content">
        @yield('content')
      </section>
    </div>
    @include('partials.layouts.admin.footer')
  </div>
  <script src="{{ URL::asset('assets/javascript/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/javascript/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('assets/javascript/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ URL::asset('assets/javascript/fastclick.min.js') }}"></script>
  <script src="{{ URL::asset('assets/javascript/AdminLTE.min.js') }}"></script>
  @yield('page_js')
</body>
</html>

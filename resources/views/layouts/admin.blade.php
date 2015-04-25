<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <title>@yield('page_title') | Console</title>
  <link rel="stylesheet" href="{{ elixir('css/admin.css') }}">
  <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.min.js') }}</script>
    <script src="{{ URL::asset('js/respond.js') }}"></script>
  <![endif]-->
</head>
<body class="skin-blue">
  <div class="wrapper">
    @include('layouts.admin.top_bar')
    @include('layouts.admin.side_bar')
    <div class="content-wrapper">
      <section class="content">
        @yield('content')
      </section>
    </div>
    @include('layouts.admin.footer')
  </div>
  <script src="{{ elixir('js/admin.js') }}"></script>
  @yield('page_js')
</body>
</html>

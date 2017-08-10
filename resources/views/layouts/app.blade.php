<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title','')</title>
<meta name="description" content="@yield('description','')" />
<meta name="keywords" content="@yield('keywords','')" />
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/scrollbar.css') }}">
    <link rel="stylesheet" href="@yield('style','')">
    
    <link rel="stylesheet" href="{{ asset('styles/datepicker.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

@yield('navigation','')
@yield('content','')
@yield('footer','')





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollbar.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/tags.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts','')
  </body>
</html>
</html>
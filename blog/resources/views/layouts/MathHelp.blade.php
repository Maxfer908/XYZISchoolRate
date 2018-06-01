<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <p>MathHelp</p>
          <li class="nav-item @if(Request::is('page1')) active @endif">
            <a class="nav-link js-scroll-trigger" href="{{ url('/page1') }}">Дискриминант</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger @if(Request::is('page2')) active @endif" href="{{ url('/page2') }}">Площадь круга</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger @if(Request::is('page3')) active @endif" href="{{ url('/page3') }}">Длина круга</a>
          </li>
          </li>
      </div>
    </nav>
    @yield('content')

</body>
</html>

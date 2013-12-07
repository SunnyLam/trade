<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>{{ SITE_NAME }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">
    @section('navbar')
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">{{ SITE_NAME }}</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::route('home') }}"><span class="glyphicon glyphicon-home"></span> Home </a></li>
            <li><a href="#about"><span class="glyphicon glyphicon-fire"></span> About </a></li>
            <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> Contact </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> Category <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-book"></span> Book </a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cutlery"></span> Household </a></li>
                <li><a href="#"><span class="glyphicon glyphicon-tree-deciduous"></span> DIY </a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::route('create_node'); }}"><span class="glyphicon glyphicon-bullhorn"></span> Publish </a></li>
            <li><img src="js/holder.js/48x48" alt="..." class="img-circle"></li>
            @if ( Auth::check() )
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->name }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Messages <span class="badge">42</span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings </a></li>
                <li><a href="{{ URL::route('logout'); }}"><span class="glyphicon glyphicon-off"></span> Logout </a></li>
              </ul>
            </li>
            @else
            <li><a href="{{ URL::route('login'); }}"> Login </a></li>
            <li><a href="{{ URL::route('register'); }}"> Register </a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    @show
    <div class="container">
      @yield('content')
    </div>
  </div>
    @section('footer')
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Example Power By  <a href="http://august.hk">August Yip</a>.</p>
      </div>
    </div>
    @show
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Google CDN jQuery library -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/holder.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

  </body>
</html>

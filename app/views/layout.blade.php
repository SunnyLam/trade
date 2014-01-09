<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

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
      <div class="navbar navbar-default navbar-static-top navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a href="{{URL::to('/')}}"><img src="{{asset('image/logo.jpg')}}" alt="杂架"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-li-none"></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 杂架摊 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li><a href="#">阅读角落</a></li>
                 <li><a href="#">家居生活</a></li>
                 <li><a href="#">手工作坊</a></li>
                 <li class="divider"></li>
                 <li><a href="#">推荐</a></li>
                 <li><a href="#">全部</a></li>
               </ul>
             </li>
             <li><a href="#"> 杂趣集地 </a></li>
           </ul>

           <form class="navbar-form navbar-left" role="search">
             <div class="input-group">
              <input type="text" class="form-control" placeholder="我想找...">
              <div class="input-group-btn navbar-search">
                <button type="button" class="btn btn-default">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </form>

          @if ( Auth::check() )
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::route('create_node'); }}"><span class="glyphicon glyphicon-bullhorn"></span> 新增物品 </a></li>
            <li><img src="{{display_avatar(isset($user) ? $user : null)}}" alt="..." class="img-circle"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->name }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::route('edit_profile', array('uid' => $user->uid)); }}"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> 消息 <span class="badge">42</span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> 设置 </a></li>
                <li><a href="{{ URL::route('logout'); }}"><span class="glyphicon glyphicon-off"></span> 退出 </a></li>
              </ul>
            </li>
          </ul>
          @else
          <div class="navbar-right">
            <!-- register button -->
            <a class="btn btn-info navbar-btn" href="{{ URL::route('register'); }}" role="button">注册</a>
            <!-- login button -->
            <a class="btn btn-success navbar-btn" href="{{ URL::route('login'); }}" role="button">登陆</a>
          </div>
          @endif

        </div><!--/.nav-collapse -->
      </div><!--/.container -->
    </div><!--/.navigation -->
    @show
    <div class="container">
      @yield('content')
    </div>
  </div>
  @section('footer')
  <div id="footer">
    <div class="container">
      <div class="pull-left">
        <p class="text-muted credit">© 版权归属 2014</p>
      </div>

      <ul class="list-inline pull-right footer-nav">
        <li><a href="#">关于杂架</a></li>·
        <li><a href="#">换物说明</a></li>·
        <li><a href="#">服务条款</a></li>·
        <li><a href="#">帮助中心</a></li>·
        <li><a href="#">联系我们</a></li>
      </ul>
    </div>
  </div><!--/.footer -->
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

@extends('layout')

@section('navbar')
  @include('header')
@overwrite

@section('footer')
  @include('footer')
@overwrite

@section('content')
<div class="row login-register-container">
  <div class="col-xs-10 col-md-6 col-md-offset-1">
    @if (isset($alerts))
      @foreach ($alerts as $alert)
        <div class="alert alert-{{ $alert['type'] }}">
          @foreach ($alert['messages'] as $message)
            {{ $message }}<br />
          @endforeach
        </div>
      @endforeach
    @endif
    <form role="form" action="{{URL::to('login')}}" class="form-horizontal" method="post" >
      <h2 class="form-signin-heading">登陆杂架</h2>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">邮箱</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="User@email.com" value="{{isset($input) ? $input['email'] : ''}}" required autofocus>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
          <button type="submit" class="btn btn-success btn-block">登陆</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-xs-6 col-md-4 col-md-offset-1 login-register-aside">
    > 还没有杂架帐号？<a href="{{URL::to('register')}}">立即注册</a>
  </div>
</div><!--/.login-register-container -->
@stop

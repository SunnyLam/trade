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
    <form role="form" action="{{URL::to('register')}}" class="form-horizontal" method="post" >
      <h2 class="form-signin-heading">欢迎加入杂架</h2>
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">帐号</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="name" name="name" placeholder="Username" required value="{{isset($input) ? $input['name'] : ''}}" autofocus>
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">邮箱</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="User@email.com" value="{{isset($input) ? $input['email'] : ''}}" required >
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="password_confirmation" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox">我已经认真阅读并同意杂架的《使用协议》。
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
          <button type="submit" class="btn btn-success btn-block">注册</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-xs-6 col-md-4 col-md-offset-1 login-register-aside">
    > 已经拥有杂架帐号? <a href="{{URL::route('login')}}">直接登录</a>
  </div>
</div><!--/.login-register-container -->
@stop

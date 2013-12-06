@extends('layout')
@section('content')
<div class="page-header">
  <h1>Register</h1>
</div>
<div class="login_register_form_container">
  @if (isset($alerts))
    @foreach ($alerts as $alert)
      <div class="alert alert-{{ $alert['type'] }}">
        @foreach ($alert['messages'] as $message)
          {{ $message }}<br />
        @endforeach
      </div>
    @endforeach
  @endif
  <form role="form" action="{{ URL::to('register') }}" method="post" >
    <div class="form-group">
      <label for="name">Username</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Username" required value="{{ isset($input) ? $input['name'] : ''; }}" autofocus>
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="User@email.com" value="{{ isset($input) ? $input['email'] : ''; }}" required >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required>
    </div>
    <!--div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div-->
    <button type="submit" class="btn btn-primary btn-block">Register</button>
    <a href="{{ URL::route('login'); }}" class="btn btn-info btn-block" role="button">Login</a>
  </form>
</div>
@stop

@extends('layout')
@section('content')
<div class="page-header">
  <h1>Profile</h1>
</div>
<div class="row">
  <div class="col-md-9">
    @if (isset($alerts))
      @include('alerts', array('alerts' => $alerts))
    @endif
    <form class="form-horizontal" role="form" action="{{ URL::route('upload_avatar', array('uid' => $user->uid)) }}" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="col-sm-4 control-label">Current Avatar</label>
        <div class="col-sm-8">
        @if ($user->avatar)
          <img src="{{asset( AVATAR_PUBLIC_PATH . $user->uid . '/large.png')}}" alt="..." class="img-rounded">
          <img src="{{asset( AVATAR_PUBLIC_PATH . $user->uid . '/normal.png')}}" alt="..." class="img-rounded">
          <img src="{{asset( AVATAR_PUBLIC_PATH . $user->uid . '/mini.png')}}" alt="..." class="img-rounded">
        @else
          <img src="{{ asset('js/holder.js/96x96') }}" alt="..." class="img-rounded">
          <img src="{{ asset('js/holder.js/48x48') }}" alt="..." class="img-rounded">
          <img src="{{ asset('js/holder.js/24x24') }}" alt="..." class="img-rounded">
        @endif
        </div>
      </div>
      <div class="form-group">
        <label for="avatar" class="col-sm-4 control-label">Upload New</label>
        <div class="col-sm-8">
          <input type="file" id="avatar" name="avatar">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <button type="submit" class="btn btn-default">Upload</button>
        </div>
      </div>
    </form>
  </div><!-- /.col-md-9 -->

</div><!-- /.row -->
@stop

@extends('layout')
@section('content')
<div class="page-header">
  <h1>Message Inbox</h1>
</div>
<div class="row">
  <div class="col-md-9">
    @if (isset($alerts))
      @include('alerts', array('alerts' => $alerts))
    @endif
    <div class="message_form_container">
      <form class="form-horizontal" role="form" action="{{ URL::to('/message/send') }}" method="post">
        <input type="hidden" name="to_uid" value="{{$inbox_user->uid}}" />
        <div class="form-group">
          <p class="form-control-static">To: {{$inbox_user->name}}</p>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="content" rows="3"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Send</button>
        </div>
      </form>
    </div><!-- /.message_form_container -->
    <hr />
    <div class="message_list_container">
      <ul class="media-list">
      @foreach ($messages as $m)
        <li class="media">
        @if ( $user->uid == $m->from_uid )
          <a class="pull-right" href="#">
            <img class="media-object" src="{{display_avatar($user)}}" alt="{{$user->name}}">
          </a>
          <div class="media-body" style="text-align: right;">
            <h4 class="media-heading">{{$user->name}}</h4>
            {{$m->content}}
            <br /><br />
            <div role="toolbar" class="btn-toolbar">
              <button class="btn btn-default btn-xs" type="button"><span class="glyphicon glyphicon-trash"></span> Delete </button>
            </div>
          </div>
        @else
          <a class="pull-left" href="#">
            <img class="media-object" src="{{display_avatar($inbox_user)}}" alt="{{$inbox_user->name}}">
          </a>
          <div class="media-body">
            <h4 class="media-heading">{{$inbox_user->name}}</h4>
            {{$m->content}}
            <br /><br />
            <div role="toolbar" class="btn-toolbar">
              <button class="btn btn-default btn-xs" type="button"><span class="glyphicon glyphicon-trash"></span> Delete </button>
            </div>
          </div>
        @endif

        </li>
      @endforeach
      </ul>
    </div><!-- /.message_list_container -->

  </div><!-- /.col-md-9 -->

</div><!-- /.row -->
@stop

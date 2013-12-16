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
    <div class="message_list_container">
      <ul class="media-list">
      @foreach ($messages as $m)
        <li class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="{{ asset('js/holder.js/48x48') }}" alt="...">
          </a>
          <div class="media-body">
            <h4 class="media-heading">{{$m->name}}</h4>
            {{$m->content}}
            <br /><br />
            <div role="toolbar" class="btn-toolbar">
              <a href="{{URL::to('/message/inbox/' . $m->uid)}}" class="btn btn-default btn-xs" type="button"><span class="glyphicon glyphicon-share-alt"></span> Reply </a>
              <button class="btn btn-default btn-xs" type="button"><span class="glyphicon glyphicon-trash"></span> Delete </button>
            </div>
          </div>
        </li>
      @endforeach
      </ul>
    </div><!-- /.message_list_container -->

  </div><!-- /.col-md-9 -->

</div><!-- /.row -->
@stop

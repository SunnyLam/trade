@extends('layout')
@section('content')

<!-- Nav tabs -->
<ul class="nav nav-tabs nav-tabs-bottom">
  <li class="active"><a href="#home" data-toggle="tab">可换杂架</a></li>
  <li><a href="#own" data-toggle="tab">私藏物品</a></li>
  <li><a href="#group" data-toggle="tab">杂趣集地</a></li>
  <li><a href="#members" data-toggle="tab">成 员</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane row active" id="home">
    @for ($i = 0; $i < 12; $i++)
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="js/holder.js/300x200" alt="...">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
    @endfor
  </div><!--/.home -->

  <div class="tab-pane" id="own">...</div>
  <div class="tab-pane" id="group">...</div>
  <div class="tab-pane" id="members">...</div>
</div><!--/.tab-content -->


@stop

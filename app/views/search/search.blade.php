@extends('layout')
@section('content')

<!-- TODO: breadcrumb -->

<!-- Nav tabs -->
<ul class="nav nav-tabs">
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
      <div class="board-shade lightbox">

        <a target="_blank" href="#">
          <div class="story-image">
            <img src="js/holder.js/240x240" alt="...">
          </div><!--/.story-image -->
        </a>
        <div class="story-actions">
          <a class="btn btn-danger" href="#" role="button"><span class="glyphicon glyphicon-heart-empty"></span></a>
        </div>

        <div class="story-title">
          <a href="#">Thumbnail labe-l Edelstahl-Ring mit Zirkonia</a>
        </div><!--/.story-title -->

        <div class="story-info">
          <div class="public-pull-left">
            <a href="#">发布者</a>
          </div>
          <div class="public-pull-right">
            <ul class="list-inline pull-right">
              <li><span class="glyphicon glyphicon-heart"></span> <span>0</span></li>
              <li><span class="glyphicon glyphicon-comment"></span> <span>2</span></li>
            </ul>
          </div>

        </div><!--/.story-info -->

      </div><!--/.shade board-preview -->
    </div><!--/.col-sm-6 col-md-3 -->
    @endfor
  </div><!--/.home -->

  <div class="tab-pane" id="own">...</div>
  <div class="tab-pane" id="group">...</div>
  <div class="tab-pane" id="members">...</div>
</div><!--/.tab-content -->
@stop

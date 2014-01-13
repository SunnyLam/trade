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
        <a class="thumbnail-middle" target="_blank" href="#">
          <img class="story-image" src="js/holder.js/240x240" alt="...">
        </a>
        <div class="caption thumbnail-justify">
          <a target="_blank" href="#"><h3>Thumbnail label</h3></a>
          <ul class="list-inline">
            <li><a href="#">发表人</a></li>·
            <li> 喜欢 123 </li>·
            <li> 评论 23 </a></li>·
          </ul>
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

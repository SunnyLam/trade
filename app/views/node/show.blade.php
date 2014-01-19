@extends('layout')
@section('content')

<div class="row">
  <div class="col-md-9">
    <div class="row board-shade detail">
      <div class="col-md-5 detail-images">
          <div class="large-image-box">
            <a href="#"> <img src="js/holder.js/320x320"></a>
          </div>
          <ul class="list-inline nav-images">
            <li><a href="#"><img src="js/holder.js/50x50"></a></li>
            <li><a href="#"><img src="js/holder.js/50x50"></a></li>
            <li><a href="#"><img src="js/holder.js/50x50"></a></li>
            <li><a href="#"><img src="js/holder.js/50x50"></a></li>
          </ul>
        </div><!-- /.detail-images -->
      <div class="col-md-7 detail-info">
          <h2 >Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div><!-- /.detail-info -->
    </div><!-- /.detail -->

    <div class="comment">

    </div><!-- /.comment -->
  </div>

  <div class="col-md-3">
    <div class="board-shade publisher">
      <div class="publisher-box">
        <div class="publisher-pull-left"><a href="#"><img src="js/holder.js/48x48" class="img-circle"></a></div>
        <div class="publisher-pull-right">
          <a href="">发布者</a>
          <ul class="list-inline">
            <li>杂架 <span>54</span></li>
            <li>关注 <span>16</span></li>
            <li>粉丝 <span>38</span></li>
          </ul>
        </div><!-- /.publisher-pull-right -->
      </div><!-- /.publisher-box -->
      <div class="published">
        <span>TA的杂架：</span>
        <ul class="list-inline">
          <li><a href="#"><img src="js/holder.js/60x60"></a></li>
          <li><a href="#"><img src="js/holder.js/60x60"></a></li>
          <li><a href="#"><img src="js/holder.js/60x60"></a></li>
        </ul>
      </div>
    </div><!-- /.publisher -->

    <div class="board-shade fans">
      喜欢这件物品的用户:
      <div class="fans-image">
        <ul class="list-inline">
          <li><a href="#"><img src="js/holder.js/40x40"></a></li>
          <li><a href="#"><img src="js/holder.js/40x40"></a></li>
          <li><a href="#"><img src="js/holder.js/40x40"></a></li>
          <li><a href="#"><img src="js/holder.js/40x40"></a></li>
        </ul>
      </div>
      <a href="">更多»</a>
    </div>
  </div><!-- /.col-md-3 -->
</div><!-- /.row -->

@stop

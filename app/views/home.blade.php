@extends('layout')
@section('content')
<!-- Main component for a primary marketing message or call to action -->

<!-- Banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/banner/test1.jpg" alt="..."><!--<div class="carousel-caption"><h3>活动推广 强势袭击</h3><p>生活就该可爱！</p></div>-->
    </div>
    <div class="item">
      <img src="image/banner/test2.jpg" alt="..."><!--<div class="carousel-caption"><h3>活动推广 强势袭击</h3><p>生活就该可爱！</p></div>-->
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel-inner -->

<hr class="featurette-divider">

<!-- Recommend -->
<div class="row recommend-align">
  <div class="col-lg-4">
    <img data-src="holder.js/300x300" alt="300x300" style="width: 300px; height: 300px;" src="image/recommend/example1.jpg">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img data-src="holder.js/300x300" alt="300x300" style="width: 300px; height: 300px;" src="image/recommend/example2.jpg">
    <h2>Heading</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img data-src="holder.js/300x300" alt="300x300" style="width: 300px; height: 300px;" src="image/recommend/example3.jpg">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

<hr class="featurette-divider">
<!-- Featurette -->
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="image/featurette/featurette1.jpg">
  </div>
</div><!-- /.row featurette -->

<hr class="featurette-divider featurette-align">

<div class="row featurette">
  <div class="col-md-5">
    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="image/featurette/featurette2.jpg">
  </div>
  <div class="col-md-7">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
</div><!-- /.row featurette -->

@stop

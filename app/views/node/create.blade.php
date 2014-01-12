@extends('layout')
@section('content')

<div class="page-header">
  <h1>新增物品</h1>
</div>
<div class="row">
  <div class="col-md-9">
    @if (isset($alerts))
      @foreach ($alerts as $alert)
        <div class="alert alert-{{ $alert['type'] }}">
          @foreach ($alert['messages'] as $message)
            {{ $message }}<br />
          @endforeach
        </div>
      @endforeach
    @endif
    @include('node.node_form', array('action' => 'create_node'))
  </div><!-- /.col-md-9 -->

</div><!-- /.row -->
@stop

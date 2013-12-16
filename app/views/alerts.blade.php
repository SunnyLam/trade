@foreach ($alerts as $alert)
  <div class="alert alert-{{ $alert['type'] }}">
    @foreach ($alert['messages'] as $message)
      {{ $message }}<br />
    @endforeach
  </div>
@endforeach

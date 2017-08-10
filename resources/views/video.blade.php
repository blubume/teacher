@extends('layouts.app')

@section('description')
 Blubu-video
@stop

@section('keywords')
 Blubu-video
@stop

@section('title')
 Blubu-video
@stop

@section('style')
{{ asset('styles/video.css') }}
@stop


@section('scripts')
<script>

toogleAudio();
toogleVideo();
</script>
@stop
@section('content')
    <div id="container">
      <video id="videoElement" autoplay="true"></video>
      <div class="time-control"><a href="{{url('/application_ok	')}}" class="item inverse">
          <div class="ok"></div></a>00:05:00/00:03:18</div>
    </div>
@stop
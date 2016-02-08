@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-3">
      <h1>{!! $flyer->street !!}</h1>
      <h2>{!!  $flyer->price !!}</h2>
      <hr>
      <div class="description">
        {!! nl2br($flyer->description) !!}
      </div>
    </div>
    <div class="col-md-9">
      @foreach ($flyer->photos as $photo)
        <img src="{{ URL::To($photo->path) }}" alt="" width="600" />
      @endforeach
    </div>
  </div>

  <form id="addPhotosForm" action="{{URL::To($flyer->zip.'/'. $flyer->street)}}/photos" method="post" class="dropzone" id="my-awesome-dropzone">
    {{ csrf_field()}}
  </form>

@stop

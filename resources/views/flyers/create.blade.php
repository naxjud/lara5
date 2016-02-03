@extends('layout')

@section('content')
<h1>Selling your home? </h1>

<form enctype="multipart/form-data" action="flyers" method="POST">
  <div class="form-group">
    <label for="street">Street:</label>
    <input type="text" name="street" id="street" class="form-control" value="{{old('street')}}">
  </div>
  <div class="form-group">
    <label for="city">city:</label>
    <input type="text" name="city" id="city" class="form-control" value="{{old('city')}}">
  </div>
  <div class="form-group">
    <label for="zip">zip:</label>
    <input type="text" name="zip" id="zip" class="form-control" value="{{old('zip')}}">
  </div>
  <div class="form-group">
    <label for="country">country:</label>
    <select id="country" class="form-control" name="country">
      @foreach(App\Http\Utilities\Country::all() as $country)
        <option value="{{$country}}"> {{$country}} </option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="state">state:</label>
    <input type="text" name="state" id="state" class="form-control" value="{{old('state')}}">
  </div>
  <hr>
  <div class="form-group">
    <label for="price">sale price:</label>
    <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}">
  </div>
  <div class="form-group">
    <label for="description">description:</label>
    <textarea type="text" name="description" id="description" class="form-control" rows="10">
      {{old('description')}}
    </textarea>
  </div>
<div class="form-group">
  <label for="photos">photos:</label>
  <input type="file" name="photos" id="photos" class="form-control" value="{{old('photos')}}">
</div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Create Flyer</button>
  </div>

</form>
@stop

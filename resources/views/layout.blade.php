<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project Flyer</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::to('/')}}">ProjectFlyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">

  @yield('content')
</div>

<script src="{{ asset('js/libs.js') }}"></script>
<script>
Dropzone.options.addPhotosForm ={
  paramName:'photo',
  maxFilesize:3,
  acceptedFiles: '.jpg, .jpeg, .png, .bmp'
};
</script>

@include('flash')


</body>
</html>

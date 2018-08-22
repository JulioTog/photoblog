<!DOCTYPE html>
<html>
  <head>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Galeria-TriPodes Fotografia</title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-social.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/style_galeria.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
  </head>
  <body>
    <nav class="navbar navbar-default  navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Galeria Tri-Podes</a>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
  <div class="ptext ">
    <h1 class="border">Galeria</h1>
  </div>
</div>
</div>

  <div class="grid">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
  @foreach ($imagenes as $imagen)
    <div class="grid-item img ">
      <a href="#" data-toggle="modal"data-target="#{{$imagen->id}}">
      <img src="{{asset('storage/fotos/'.$imagen->nombre)}}"class=""id="{{$imagen->id}}" >
      </a>
    </div>
    <div id="{{$imagen->id}}" class="modal fade" role="dialog"tabindex="-1">
      <div class="modal-dialog">
          <div class="modal-content">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                  <img src="{{asset('storage/fotos/'.$imagen->nombre)}}" />
              </div>
          </div>
      </div>
      </div>
  @endforeach
</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/packery.pkgd.min.js')}}"></script>
      <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('js/ini.js')}}"></script>

  </body>
</html>

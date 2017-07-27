<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="{{ asset('img/favicon.png  ') }}  "  rel="shortcut icon" >



    <title>Sighca</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/alertify.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>







<body id="page-top" data-target="navbar-fixed-top">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



    <!-- Navigation -->

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">



    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


    
      <a class="navbar-brand page-scroll" id="economik" align="center"  href="{{ url('/') }}"> 

      <span class="text-info" >
<i class="fa fa-university" aria-hidden="true"></i>
Sighca <i class="fa fa-clock-o" aria-hidden="true"></i>  </span>
          </a>

<!-- marca -->









    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse"   id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">






      </ul>





   <form class="navbar-form navbar-left">
        <div class="form-group">
   



</form> 
</div>



 <ul   class="nav navbar-nav navbar-center">



 <li> <a title="" >



          </a>

</li>




</ul>


      <ul   class="nav navbar-nav navbar-right">

       
@if (Auth::guest())
     


 <li> <a class=""  href="{{ url('/login') }}">

<strong>
            Iniciar sesion </strong> </a>

</li>



<li>  <a class=" "   href="{{ url('/register') }}">


<strong>

    Crear cuenta </strong></a>

</li>






   @else
 





<li>


   <a title="Inicio"   class=""  href=" {{ url('/home') }} ">

<strong>
           Inicio </strong> </a>

</li>


<li>

<a href=""   id="linea-vertical"          >
&vert;

</a>
</li>





 <li  class="dropdown"  >






  <a title="Usuario"  data-toggle="dropdown"    >
<strong>
{{ Auth::user()->email }} </strong>

 <span class="caret">  </span></button>
  <ul class="dropdown-menu">

<li>
<a href="">Configuracion</a>
</li>


  <li class="divider"></li>




    <li><a title="Cerrar sesion"  class=" "   href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Cerrar sesion   


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

</a>


</li>


















  </ul>




          




              </a>



</li>


























</div>







                            










                        @endif



 
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
</nav>


</head>




<!-- Carrusel -->



<section id="inicio1"    width="1200" height="700" >

  <div class="carousel-inner" role="">
    <div class="">

   

<style type="text/css">
</style>
     
      <div class="portada">
       <!-- TEXTO -->


<div class="text-info" id="texto-presentacion"  align="text-center">


<h5><i class="fa fa-university" aria-hidden="true"></i>
Sighca <i class="fa fa-clock-o" aria-hidden="true"></i>  </h5>

<form>
  <div class="input-group">
    <input type="text" class="form-control  input-lg btn-circle" placeholder="Busqueda ">
    <div class="input-group-btn  ">
      <button class="btn btn-success btn-lg btn-circle" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>



<p class="subtitulo">
 <i class="fa fa-cogs text-success" aria-hidden="true"></i>
Sistema de gestion horaria y carga academica  <i class="fa fa-calendar-check-o text-success" aria-hidden="true"></i>

</p>



</div>


 
 


</section>

<!-- Carrusel  termina -->



    




















</div><!-- /.container contenedor-->


      <footer class="container-fluid col-lg-12"> 














<div   class="col-lg-12  ">

 <p  >


<center>
<hr>

<h5 id="pie"    >   © 2017  Desarrollado por <a><i class="fa fa-code" aria-hidden="true"></i>  Jose Castillo </a>  | <a  href="{{ url('/contacto') }}"  > <i class="fa fa-phone-square" aria-hidden="true"></i>  Contactanos  </a>| <a href="https://www.economik.com.ve"> <i class="fa fa-globe" aria-hidden="true"></i>  Economik.com.ve   </a>  Como proyecto de tesis. UNEFA, San Tome  </h5> 

</center>


</p>

</div>



</footer>


 
















  <!-- Plugin JavaScript -->
   <script src="js/jquery.js  " ></script>
    <script src="js/jquery.easing.min.js " ></script>


  <script src="js/script.js " ></script> 
     <script src="js/alertify.js  " ></script>
  <script src="js/bootstrap.min.js"></script>
     <script src="js/pace.min.js  " ></script>
        
 <script src="js/scrolling-nav.js"></script>
 

  


</html> 
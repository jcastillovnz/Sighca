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
    <link href="  {{ asset('css/bootstrap.min.css') }}         " rel="stylesheet">
<link rel="stylesheet" href="  {{ asset('css/font-awesome.min.css') }}           ">
    <link rel="stylesheet" href="  {{ asset('css/estilos.css') }}          ">
    <link rel="stylesheet" href=" {{ asset('css/alertify.min.css ') }}            ">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>






<body id="page-top" data-target="navbar-fixed-top">




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


    
   <a class="navbar-brand page-scroll" id="titulo" align="center"  href="{{ url('/') }}"> 
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


<ul  class="nav navbar-nav navbar-center">
  




      <form class="navbar-form navbar-center" role="form" action="{{ url('/busqueda') }}"
 method="GET"    >

{{ csrf_field() }}


        <div class="form-group">
 <div class="input-group  ">
      <input id="buscar" name="buscar" type="text" class="form-control  btn-circle " required=""  >
      <span class="input-group-btn   ">
     <button title="Haz una busqueda" class="btn btn-success   btn-circle" type="submit"> <i class="fa fa-search" aria-hidden="true"></i>    Buscar</button>
      </span>
    </div>
</form> 
</div>








</ul>







      <ul   class="nav navbar-nav navbar-right">









@if (Auth::guest())
     


 <li> <a class=""  href="{{ url('/login') }}">
<span class="color-naranja "   >


  
</span>

      <i class="fa fa-user-circle-o" aria-hidden="true"></i>           Iniciar sesion  </a>

</li>
<li>

<a  id="linea-vertical"  href="">
&vert;

</a>
</li>
<li>  <a class=""   href="{{ url('/register') }}">

<span  class="color-naranja "   >



</span>


 <i class="fa fa-user-plus" aria-hidden="true"></i>    Crear cuenta </a>

</li>






   @else
 






<li>


   <a title="Inicio"   class=""  href=" {{ url('/inicio') }} ">
<span  class="color-naranja "     >


     
</span>
<strong>
          <i class="fa fa-home" aria-hidden="true"></i>      Inicio </strong> </a>

</li>








 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
         

<strong>
             <i class="fa fa-plus-square" aria-hidden="true"></i>   Añadir</strong>

                <span class=""></span></a>
                <ul class="dropdown-menu">



       <li><a href="{{ url('/nueva-infraestructura') }}"><i class="fa fa-plus-square" aria-hidden="true"></i> Nueva infraestructura</a></li>






   <li><a href="{{ url('/nuevo-profesor') }}"><i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo profesor</a></li>




         
               
                  <li><a href="{{ url('/nuevo-pensum') }}"><i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo  Pensum</a></li>


       <li><a href="{{ url('/nueva-seccion') }}"><i class="fa fa-plus-square" aria-hidden="true"></i> Nueva seccion</a></li>



                 
                </ul>
              </li>



<li>
 

















  







<li>


   <a title="Inicio"   class=""  href=" {{ url('/diseñar-horario') }} ">
<span  class="color-naranja "     >


     
</span>
<strong>
          <i class="fa fa-calendar" aria-hidden="true"></i> Diseñar horario </strong> </a>

</li>










  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
         

<strong>
             <i class="fa fa-thumb-tack" aria-hidden="true"></i>   Asignar</strong>

                <span class=""></span></a>
                <ul class="dropdown-menu">


                   <li><a href="{{ url('/asignar-profesor') }}"><i class="fa fa-tag" aria-hidden="true"></i>   Asignar profesor</a></li>  
                  
             
                  


             
                </ul>
              </li>















 <li  class="dropdown "  >






  <a title="Usuario"  data-toggle="dropdown"    >
<strong> <i class="fa fa-suitcase" aria-hidden="true"></i>
{{ Auth::user()->name }}  {{ Auth::user()->apellido }}   </strong>

 <span class="caret">  </span></button>
  <ul class="dropdown-menu">

<li>
<a href="{{ url('/configuracion') }}"><i class="fa fa-cog" aria-hidden="true"></i>    Configuracion</a>
</li>


  <li class="divider"></li>



    <li><a title="Cerrar sesion"  class=" "   href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();" > <i class="fa fa-sign-out" aria-hidden="true"></i>   Cerrar sesion   


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


   <script src="{{ asset('js/jquery.js   ') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>

 
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
</nav>


</head>







</header>



<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>









<div   id="separador"   class="separador">

</div>


<div class="container">
    <ol class="breadcrumb breadcrumb-arrow">
    <li><a href="{{ url('/') }}">Inicio</a></li>

    <li class="active"><span> Contacto  </span></li>
  </ol>
</div>




 




   






<section id="">







   <div class="container">
            <div class="row">
    <div class="col-lg-12 text-center">

 <div class="container">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 align="left" class="h1">Contacto <small>Economik</small></h1>  <br>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">




 <form role="form" action="{{ url('/contacto') }}" method="POST" id="contacto" title="contacto"> 


 {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                     
<div class="form-group">
 
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user"></span>
                                </span>
                                <input type="text"  title="Nombre " class="form-control" name="nombre"   id="nombre"   placeholder="Ingrese su nombre" 

                                required /></div>























</div>

<div class="form-group">
 
                            <div class="input-group">
                                <span class="input-group-addon"><span class=" glyphicon glyphicon-phone-alt"></span>
                                </span>
                                <input type="tel"  title="Ingrese un numero de telefono" class="form-control" name="telefono"   id="telefono"   placeholder="Ingrese su telefono" 
  pattern="[0-9]{9,15}"
                                required /></div>

</div>











<div class="form-group">
 
                       
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-envelope"></span>
                                </span>


                                <input type="email"  title="Ingrese su correo" class="form-control" name="correo"   id="correo"   placeholder="Ingrese su correo" 

                                required /></div>

</div>







<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control" >
                                <option value="" selected="">Elija su ciudad:</option>
                                <option value="El tigre">El Tigre</option>
                                <option value="San jose de guanipa">San Jose de guanipa</option>
                                      <option value="San tome">San Tome </option>
                               
                            </select>
                        </div>

                        </div>


                    <div class="col-md-6">
                        <div class="form-group">
                           
                            <textarea  name="mensaje" value=""  id="mensaje" class="form-control" rows="8" cols="20" required
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="enviar">
                            Enviar mensaje</button>
                    </div>

                </div>

                </form>

            </div>
  
        </div>



        <div class="col-md-4 ">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Nuestra direccion</legend>
            <address>
                <strong>Economik:</strong><br>
                El Tigre, estado Anzoategui, Venezuela
          </address>
          
                  <strong> Telefonos de contacto:</strong> 
           
            <address>
            Atencion al cliente: 04261857520</abbr><br>
             Fundador Jose Castillo:     04141948033
            </address>
            <address>
                <strong>Correo:</strong>
                <a href="mailto:#" class="target-white"  >atencionalcliente@economik.com</a>


            </address>
            </form>


<hr>

        </div>

    </div>
</div>




  













    

</section>
















<section id="informacion" >




<div class="text-center ">
    <div class="col-lg-12">
<div class="container">



<did class="container col-sm-4 "  > 

<div class="thumbnail well">
      <img src="img/pago.png"  width="35px" alt="...">
      <div class="caption">
   <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Tu Pago</h4>



        <p class="text-justify text-muted"  >Haz tus pagos de manera online, mediante transferencia bancaria o en efectivo, de manera personal al recivir tu compra. Nuestro mayor compromiso es la seriedad y transparencia en cada transaccion</p>
     
      </div>
    </div>


</did><did class="container col-sm-4" > 

<div class="thumbnail well">
      <img src="img/reputacion.png" width="35px" alt="...">
      <div class="caption">
      <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Seguridad</h4>
        <p  class="text-justify  text-muted"> Economik.com.ve proporciona informacion de sus responsables, ademas que podras ver las opiniones de otros usuarios, en nuestra pagina en facebook, haciendo de esta manera cada transaccion, transparente y directa</p>
        <p></p>
      </div>
    </div>


</did><did class="container col-sm-4 "  id="cuadro"   > 
<div class="thumbnail well"   id="cuadro"  >
      <img src="img/entrega.png" width="35px" alt="...">
      <div class="caption">
       <h4 class="" id="subtitulo" style="color:#6d6d6d;" > Recibe tu producto</h4>
        <p class="text-justify text-muted" >Recibe tu compra en puntos centricos y seguros de la ciudad del Tigre, o segun tu eleccion la llevamos a tu domicilio, en caso de compra fuera de la zona realizamos envios por mrw, tealca, domesa y zoom </p>
        <p></p>
      </div>
    </div>
</did>
     

</div>

  
         
  
    </div> <!-- /.row -->
</div> <!-- /.container -->
 <hr class="featurette-divider">
</section>

    

    













</body> 




      <footer class="container col-lg-12">   <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
            
                </div>
            </div>
        </div>



<div class="col-sm-12  "> <p   >



<center>
<h5 id="pie">   © 2017  Desarrollado por <a>Jose Castillo</a>  | <a  href="{{ url('/contacto') }}"  >Contactanos  </a>| Economik.com.ve un emprendimiento e-commerce, radicados en la ciudad de El Tigre, estado Anzoategui   </h5>   </p>
</div>

</center>



<!--      @if (Route::has('login'))
              
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
               
            @endif-->

      </footer>

    </div><!-- /.container contenedor-->



















  <!-- Plugin JavaScript -->
   <script src="js/jquery.js  " ></script>
    <script src="js/jquery.easing.min.js " ></script>


  <script src="js/script.js " ></script> 
     <script src="js/alertify.js  " ></script>
  <script src="js/bootstrap.min.js"></script>
     <script src="js/pace.min.js  " ></script>
        

 

  


</html> 
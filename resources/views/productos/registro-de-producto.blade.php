<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="{{ asset('img/favicon.png  ') }}  "  rel="shortcut icon" >


 
    <title> Registro de producto     </title>

    <!-- Styles -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">


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
<strong>

      <i id="carrito" class="fa fa-shopping-cart" aria-hidden="true"></i>  <span id="E"> E</span><span id="co">co</span><span id="no">no</span><span id="mi">mi</span><span id="k">k </span>   

</strong>

          </a>

<!-- marca -->









    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse"   id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">






      </ul>




      <form class="navbar-form navbar-left">




        <div class="form-group">
 <div class="input-group  ">
      <input type="text" class="form-control btn-circle ">
      <span class="input-group-btn   ">
        <button title="Busca un articulo" class="btn btn-warning btn-circle " type="button"> <i class="fa fa-search" aria-hidden="true"></i>    Buscar</button>
      </span>
    </div>
</form> 
</div>







      <ul   class="nav navbar-nav navbar-right">

       
@if (Auth::guest())
     


 <li> <a class=""  href="{{ url('/login') }}">
<span class="color-naranja "   >


  
</span>

            Iniciar sesion  </a>

</li>
<li>

<a  id="linea-vertical"  href="">
&vert;

</a>
</li>
<li>  <a class=""   href="{{ url('/register') }}">

<span  class="color-naranja "   >



</span>


    Crear cuenta </a>

</li>






   @else
 





<li>


   <a title="Inicio"   class=""  href=" {{ url('/home') }} ">
<span  class="color-naranja "     >


     
</span>
<strong>
            Inicio </strong> </a>

</li>


<li>

<a href="" id="linea-vertical"   >
&vert;

</a>
</li>





 <li  class="dropdown "  >






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














</header>
  



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<body>



























<div   id="separador"   class="separador">

</div>


<div class="container">
    <ol class="breadcrumb breadcrumb-arrow">
    <li><a href="{{ url('/') }}">Inicio</a></li>
    <li><a href="">Productos</a></li>
    <li class="active"><span>    </span></li>
  </ol>
</div>




<section  id="lista-productos"     >   
 
  





    <div class="">
      <div class="container"    >
      <form role="form" action="{{ url('/registro-de-producto') }}" method="POST" enctype="multipart/form-data" > 


{{ csrf_field() }}



          <div class="preview col-md-6">
              

<h1><i class="fa fa-shopping-cart" aria-hidden="true"></i>
Cargar datos de producto</h1>













<p>
<did class=" form-group" >    


 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-tag"></span>
                                </span>
<input  class="form-control input-sm" type="text " name="titulo" id="titulo" placeholder="Titulo" >  
</did>




</div></p>




<p>

<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-certificate"></span>
                                </span>
<input  class="form-control input-sm" type="text " name="estado" id="estado"  placeholder="Estado"   >  
</did></div></p>




<p>
<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span > <strong  style="font-size: 12px;">   Bs</strong></span>
                                </span>
<input  class="form-control input-sm" type="text " name="precio" id="precio"  placeholder="Precio"              >  
</did>
</div></p>


<p>
<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-check"></span>
                                </span>
<input class="form-control input-sm" type="text " name="descripcion1"  id="descripcion1"  placeholder="Caracteristica #1"              >  
</did></div></p>


<p>

<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-checkfa fa-check"></span>
                                </span>
<input  class="form-control input-sm" type="text " name="descripcion2"  id="descripcion2"     placeholder="Caracteristica #2"               >  
</did></div>
</did></p>



<p>
<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-check"></span>
                                </span>
<input  class="form-control input-sm" type="text " name="descripcion3"  id="descripcion3"   placeholder="Caracteristica #3"           >  
</did></div>
</p>



<p>

<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-check"></span>
                                </span>
<input  class="form-control input-sm" type="text " name="descripcion4" id="descripcion4"     placeholder="Caracteristica #4"                 >  
</did></div></p>




<p>
<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-check"></span>
                                </span>
<input  class="form-control input-sm" type="text " name="descripcion5"    id="descripcion5"     placeholder="Caracteristica #5"                 >  
</did>
</div></p>





<p>
<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-check"></span>
                                </span>
<input  class="form-control input-sm" type="number" name="disponibilidad"   min="1" max="100" id="disponibilidad"   placeholder="Cantidad de articulos"       >  
</did></div></p>













          </div>





          <div class="details col-md-6">

<h1><i class="fa fa-picture-o" aria-hidden="true"></i>
Cargar imagenes de producto</h1>






<p>
<did class=" form-group" >    

     <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-file-image-o"></span>
                                </span>

<input class="form-control input-sm" type="file" id="imagen1"  name="imagen1">  
</did></div></p>








<p>
<did class=" form-group" > 

 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-file-image-o"></span>
                                </span>



<input  class="form-control input-sm" type="file" id="imagen2"  name="imagen2">  
</did></div></p>





<p>

<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-file-image-o"></span>
                                </span>
<input  class="form-control input-sm" type="file" id="imagen3"   name="imagen3">  
</did></div></p>



<p>


<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-file-image-o"></span>
                                </span>
<input  class="form-control input-sm" type="file" id="imagen4" name="imagen4">  
</did></div></p>



<p>

<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-file-image-o"></span>
                                </span>
<input  class="form-control input-sm" type="file" id="imagen5" name="imagen5">  
</did>
</div></p>





<p>
<did class=" form-group" >    
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-file-image-o"></span>
                                </span>
<input  class="form-control input-sm" type="file" id="imagen6" name="imagen6">  
</did></div>
        </p>





     <strong>  <i class="fa fa-info-circle" aria-hidden="true"></i>   Mas informacion    </strong>   
 



<did class=" form-group" >    

<textarea  class="form-control"  rows="5" id="masinformacion"   name="masinformacion">    </textarea>

</did>



<div class="form-group" align="right" >

<button type="submit"  class="btn btn-success">   Guardar</button></div>


      </div>



</form>




</div>


     








</section>













</section>


    



<hr>

    

    




















  </div><!-- /.container contenedor-->


      <footer class="container-fluid col-lg-12"> 















<div   class="col-lg-12  ">

 <p  >


<center>
<hr>

<h5 id="pie"    >   © 2017  Desarrollado por <a><i class="fa fa-code" aria-hidden="true"></i>  Jose Castillo</a>  | <a  href="{{ url('/contacto') }}"  > <i class="fa fa-phone-square" aria-hidden="true"></i>  Contactanos  </a>| <a href="https://www.economik.com.ve"> <i class="fa fa-globe" aria-hidden="true"></i>  Economik.com.ve   </a>  un emprendimiento e-commerce, radicados en la <strong>ciudad de El Tigre</strong> , estado Anzoategui   </h5> 
<hr>
</center>


</p>

</div>






















  <!-- Plugin JavaScript -->
   <script src="{{ asset('js/jquery.js   ') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>


  <script src="  {{ asset('js/script.js  ') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        

 

  


</html> 
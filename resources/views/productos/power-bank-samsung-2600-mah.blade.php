<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="img/favicon.png"  rel="shortcut icon" >


 
    <title> Economik │   {{  $productos[0]->titulo }}       </title>

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
    <li><a href="#">Productos</a></li>
    <li class="active"><span> {{  $productos[0]->titulo }}  </span></li>
  </ol>
</div>




<section  id="lista-productos"     >   
 
  





    <div class="">
      <div class="container"    >
        <div class="wrapper row ">      
          <div class="preview col-md-4">
              
            <div class=" tab-content "   >





 <label class="label label-warning   " style="font-size: 15px;" > {{  $productos[0]->estado }}    </label>










              <div class="tab-pane active  img-responsive      " id="pic-1">

           

              <img class="img-responsive  " src="img/productos/cargador.jpg" /></div>
              <div class="tab-pane  " id="pic-2"><img src="img/productos/cargador2.jpg" /></div>
              <div class="tab-pane" id="pic-3"><img src="img/productos/cargador3.jpg" /></div>
              <div class="tab-pane" id="pic-4"><img src="img/productos/cargador4.jpg" /></div>
              <div class="tab-pane" id="pic-5"><img src="img/productos/cargador5.jpg" /></div>
            </div>
          
            <ul      id="panel-superior-precio" class="preview-thumbnail nav nav-tabs">









              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/productos/cargador.jpg" /></a></li>



              <li><a data-target="#pic-2" data-toggle="tab"><img src="img/productos/cargador2.jpg" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="img/productos/cargador3.jpg" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="img/productos/cargador4.jpg" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="img/productos/cargador5.jpg" /></a></li>
            </ul>
            <label  id="precios" class="label label-warning btn-block"  >
<strong>
 <span id=""> Bs: {{  $productos[0]->precio }}  </span> </strong>
</label>












          </div>





          <div class="details col-md-5">





               <div class="form-group " >






                        <h1  >  <i class="fa fa-gift" aria-hidden="true"></i>

   {{    $productos[0]-> titulo }} 
 </span>
  </h1>
 </div> 









            <div class="">

<hr >

  
            <h3> <span id="" class=" ">

            <span class="text-success">
<i class="fa fa-bookmark " aria-hidden="true"></i></span>
            Caracteristicas </span></h3>




            </div>



<p  id="caracteristicas"  class="form-group">


<i class="fa fa-check  text-success" aria-hidden="true"></i>
{{  $productos[0]->descripcion1 }}

</p>


<p   id="caracteristicas" class="form-group">
<i class="fa fa-check text-success" aria-hidden="true"></i>


{{  $productos[0]->descripcion2 }}

</p>

<p  id="caracteristicas" class="form-group">

<i class="fa fa-check text-success" aria-hidden="true"></i>
{{  $productos[0]->descripcion3 }}

</p>

<p  id="caracteristicas" class="form-group">
<i class="fa fa-check text-success" aria-hidden="true"></i>


{{  $productos[0]->descripcion4 }}

</p>

<p  id="caracteristicas" class="form-group">


<i class="fa fa-check text-success" aria-hidden="true"></i>

{{  $productos[0]->descripcion5 }}

</p>








            

<div  class="form-group">
<hr >

<p> 

            <span id="caracteristicas" class=" text-success"> <i class="fa fa-tachometer" aria-hidden="true"></i></span>    Colores
            </p>


<hr>



</div>

<div class="form-group">



   <p  id="caracteristicas" > 



   <i class="fa fa-street-view  text-success" aria-hidden="true"></i>
    Entregas


            </p>

<p id="caracteristicas"  >  <i class="fa fa-check text-success" aria-hidden="true"></i>             CC San Remo mall</p> 
<p  id="caracteristicas"      >  <i class="fa fa-check text-success" aria-hidden="true"></i>       CC Petrucci</p>  
<p id="caracteristicas"     > <i class="fa fa-check text-success" aria-hidden="true"></i>
CC Super sonido </p>


<p id="caracteristicas"     > <i class="fa fa-check text-success" aria-hidden="true"></i>
A domicilio </p>









</div>
    @if (Auth::guest())
<div  class="form-group"> 
              <a   href ="{{ url('registro-de-compra', $productos[0]->id) }}"  class="btn btn-success btn-sm  btn-block " type="button">


              <i class="glyphicon glyphicon-shopping-cart"   aria-hidden="true"></i> Registro de compra</a>

 </div>
<div  class="form-group"> 
 <a class=" btn btn-success btn-sm  btn-block" > Registrarme</a>


</div>       




 @else
<div  class="form-group"> 
 <a class=" btn btn-success btn-sm  btn-block"   href="{{ url('/registro-de-compra') }}

              ><i class="glyphicon glyphicon-shopping-cart"   aria-hidden="true"></i> Comprar </a>

</div>
      @endif


            
        




          </div>








                  <div class="col-md-4">


                 <div class="fb-page" data-href="https://www.facebook.com/tiendaeconomik" data-tabs="timeline" data-width="350" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tiendaeconomik" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tiendaeconomik">Economik - El Tigre</a></blockquote></div>
 </div>
        </div>



      </div>



    </div>






 

  </div>





</section>





<section id="mas-informacion" > 



<div class="container">


<hr>
    <div class="row col-lg-12">



<h1>    <i class="fa fa-info-circle" aria-hidden="true"></i>     <strong>  Mas informacion    </strong>           </h1>









<p> 
Te presentamos al power bank de 2600 mah (Miliamperios hora)


</p>












        </div>



      </div>




  </section>










<section id="datas" > 



<div class="container">


<hr>
    <div class="row">








        <div class="col-xs-12 col-xs-4" >
            <div class="">
  <center id="">

 

<strong   id="" > 

Nº Ventas:    
</strong>


 



   </center>
 <hr> 
            </div>
        </div>
      
        <div class="col-xs-12 col-xs-4" >
              <div class="">



  <center id="">




<strong   id="" > 

Nº Visitas:  
</strong>
</center>
 <hr> 
            </div>
        </div>
       
        <div class="col-xs-12 col-xs-4" >
        <div class="">
<center id="">




<strong   id="" > 
Nº Articulos: 
</strong>
</center>
 
 <hr> 
            </div>



        </div>



      </div>




  </section>






</section>


    



<section  >




<div class="text-center "         >
    <div class=" col-lg-12   " id="informacion"   ><hr>
<div class="container">



<did class="container col-sm-4 "  > 
<hr>
<div class="thumbnail well">
      <img src="img/pago.png"  width="35px" alt="...">
      <div class="caption">
   <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Tu Pago</h4>



        <p class="text-justify text-muted"  >Haz tus pagos de manera online, mediante transferencia bancaria o en efectivo, de manera personal al recibir tu compra. Nuestro mayor compromiso es la seriedad y transparencia en cada transaccion</p>
     
      </div>
    </div><hr>


</did><did class="container col-sm-4" > 
<hr>
<div class="thumbnail well">
      <img src="img/reputacion.png" width="35px" alt="...">
      <div class="caption">
      <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Seguridad</h4>
        <p  class="text-justify  text-muted"> Economik.com.ve proporciona informacion de sus responsables, ademas que podras ver las opiniones de otros usuarios, en nuestra pagina en facebook, haciendo de esta manera cada transaccion, transparente y directa</p>
        <p></p>
      </div>
    </div><hr>


</did><did class="container col-sm-4 "  id=""   > 
<hr>
<div class="thumbnail well"   id=""  >
      <img src="img/entrega.png" width="35px" alt="...">
      <div class="caption">
       <h4 class="" id="subtitulo" style="color:#6d6d6d;" > Recibe tu producto</h4>
        <p class="text-justify text-muted" >Recibe tu compra en puntos centricos y seguros de la ciudad del Tigre, o segun tu eleccion la llevamos a tu domicilio, en caso de compra fuera de la zona realizamos envios por mrw, tealca, domesa y zoom </p>
        <p></p>
      </div>
    </div><hr>
</did>
     

</div>

  
         
</div> <!-- /.row -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
 
</section>

    

    




















  </div><!-- /.container contenedor-->


      <footer class="container-fluid col-lg-12"> 





<section   id="redes-sociales" >


<div class="text-center ">
    <div class="col-lg-12"><hr>
<div class="container">



<did class="container col-sm-4 "  > 

<div class=" ">
  
      <div class="caption">



<div class="fb-page" data-href="https://www.facebook.com/tiendaeconomik" data-tabs="timeline" data-width="350" data-height="420" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tiendaeconomik" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tiendaeconomik">Economik - El Tigre</a></blockquote></div>
      </div>
    </div>


</did><did class="container col-sm-4" > 

<div class=" ">
   
      <div class="caption">

  <iframe width="350" height="420" src="https://www.youtube.com/embed/ge0VUOou82M" frameborder="0" allowfullscreen></iframe>
      
      </div>
    </div>


</did><did class="container col-sm-4 "  id=""   > 
<div class=" "   id=""  >
         
      <div class="caption">
  
<style>.embed-container {position: relative; padding-bottom: 120%; height: 0; overflow: hidden;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.instagram.com/p/BU7o4MOggKG/embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe></div>
  
      </div>
    </div>
</did>
     

</div>

  
         
  
    </div> <!-- /.row -->
</div> <!-- /.container -->






</section>











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
   <script src="js/jquery.js  " ></script>
    <script src="js/jquery.easing.min.js " ></script>


  <script src="js/script.js " ></script> 
     <script src="js/alertify.js  " ></script>
  <script src="js/bootstrap.min.js"></script>
     <script src="js/pace.min.js  " ></script>
        
 <script src="js/scrolling-nav.js"></script>
 

  


</html> 
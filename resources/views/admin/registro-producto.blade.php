<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="img/favicon.png"  rel="shortcut icon" >


 
    <title> Economik    {{  $productos[0]->titulo }}       </title>

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




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<body>

















<section id="productos"   >

<div class="container"  >






 <did class=" container ">

<div class="content migaja">


      
          <ol class="breadcrumb "  >
            
            
            <li class="" ><a    href="/"  title="Regresar a inicio">Inicio</a></li>
            
            <li class="" ><span>Power bank Samsung 2600 MAH</span></li>
          
          </ol>
    </div>

</div>
 




<form role="form" action=" {{url('registro-producto')}}" method="POST"  id="" name=" " title="" > 


 {{ csrf_field()}}

 
  <div class="container "   >


    <div class="">
      <div class="container-fluid">
        <div class="wrapper row well">
          <div class="preview col-md-4">
            
            <div class=" tab-content "   >
              <div class="tab-pane active" id="pic-1"><img src="img/productos/cargador.jpg" /></div>
              <div class="tab-pane" id="pic-2"><img src="img/productos/cargador2.jpg" /></div>
              <div class="tab-pane" id="pic-3"><img src="img/productos/cargador3.jpg" /></div>
              <div class="tab-pane" id="pic-4"><img src="img/productos/cargador4.jpg" /></div>
              <div class="tab-pane" id="pic-5"><img src="img/productos/cargador5.jpg" /></div>
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/productos/cargador.jpg" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="img/productos/cargador2.jpg" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="img/productos/cargador3.jpg" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="img/productos/cargador4.jpg" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="img/productos/cargador5.jpg" /></a></li>
            </ul>
            
          </div>



          <div class="details col-md-10">




               <div class="form-group ">
                     <center>    <small>  <h4>    <label class="label label-warning" for="nombre"  ><i class="fa fa-bookmark" aria-hidden="true"></i>
                            Detalle de articulo  </label></h4></small></center>
                          
                        </div> 





           <p>
<input type="" class="form-control input-sm " placeholder="Ingrese titulo de producto" name="titulo" id="titulo"></p>
          

          @if($errors->has('titulo')   )

Error de titulo

          @endif
        
<div class="form-group col-sm-5">
                          
  <label for="sel1">  <small> Estado de producto:</small></label>

  
  <select name="estado" class="form-control input-sm" id="estado">
    <option value="nuevo">Nuevo</option>
  <option value="usado" >Usado</option>
  </select>
</div>

                      
                 






            
            <div class="rating">
  
            <h3> <span id="caracteristicas" class=" "><i class="fa fa-list-alt" aria-hidden="true"></i> Descripcion del producto:</span></h3>
            </div>
           


<textarea name="descripcion" id="descripcion" rows="8" cols="10"   > </textarea>


  @if($errors->has('descripcion')   )

Error de descripcion

          @endif

<div class="form-group col-md-4">
            
                                  
                    
  <label for="sel1">  <small> Precio Bs:</small></label>
 <input type="text" placeholder="10.000" class="form-control input-sm" name="">
</div>



<div class="form-group col-md-4">
            
                                  
                    
  
 <input type="number" placeholder="Cantidad de unidades" class="form-control input-sm" name="">


</div>



             
            <!--  
       
            <h5 class="sizes">sizes:
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5>-->
            


       

 
<div class="form-group  col-sm-3">
            
       Color:                           
                    
 <div class="checkbox">
  <label><input type="checkbox" value="">Rojo</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Azul</label>
</div>
<div class="checkbox disabled">
  <label><input type="checkbox" value="" >Gris</label>
  </div>
  <div class="checkbox">
  <label><input type="checkbox" value="" >Naranja</label>

</div>


 <div class="checkbox">
  <label><input type="checkbox" value="" >Verde</label>

</div>

 <div class="checkbox">
  <label><input type="checkbox" value="" >Negro</label>

</div>
</div>












      
<div class="form-group col-sm-4">
            
       Entregas en:                           
                    
 <div class="checkbox">
  <label><input type="checkbox" value="">CC San remo mall</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Plaza Bolivar El Tigre</label>
</div>
<div class="checkbox disabled">
  <label><input type="checkbox" value="" >CC Super sonido</label>
  </div>
  <div class="checkbox">
  <label><input type="checkbox" value="" >Banco provincial</label>

</div>


 <div class="checkbox">
  <label><input type="checkbox" value="" >CC petrucci</label>

</div>

 <div class="checkbox">
  <label><input type="checkbox" value="" >Negro</label>

</div>
</div>


       




         <div class="   " align="right">

         <p>
              <button  class=" btn btn-success"  

              type="submit"><i class="glyphicon glyphicon-shopping-cart"   aria-hidden="true"></i>   Guardar </button>

</p>

</form>





            
            </div>




          </div>
















        </div>



      </div>



    </div>






  <table class="table table-striped">
    
      <tr>
        <th> <small>  Disponibles <i class="fa fa-list-alt" aria-hidden="true"></i></small>  </th>
        <th><small> Vendidos <i class="fa fa-bar-chart" aria-hidden="true"></i>  </small>  </th>
        <th> <small> Ubicacion <i class="fa fa-map-marker" aria-hidden="true"></i></small>  </th>
         <th> <small>Codigo <i class="fa fa-barcode" aria-hidden="true"></i>   </small>  </th>
      </tr>
    

    </table>


  </div>





</section>










     <hr class="featurette-divider">

 <!--CUADROS  -->


<div class="container">
    <div class="row">
<div class="text-center">




     

</div>


  
<div class="container text-center cuadro">
    <div class="row  ">
<div class="">



<did class="container col-sm-4 "  > 

<div class="thumbnail well">

 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
      <img src="img/pago.png"  width="35px" alt="...">
      <div class="caption">
   <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Tu Pago</h4>

</a>
<div  id="collapse1" class="panel-collapse collapse">
        <p   class="text-justify text-muted" >Haz tus pagos de manera online, mediante transferencia bancaria o en efectivo, de manera personal al recivir tu compra. Nuestro mayor compromiso es la seriedad y transparencia en cada transaccion</p>
     </did></div>
      </div>
    </div>


</did><did class="container col-sm-4" > 

<div class="thumbnail well">
 <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">

      <img src="img/reputacion.png" width="35px" alt="...">
      <div class="caption">
      <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Seguridad</h4></a>

      <div  id="collapse2" class="panel-collapse collapse">
        <p  class="text-justify  text-muted"> Topsventas.com.ve proporciona informacion de sus responsables, ademas que podras ver las opiniones de otros usuarios, en nuestra pagina en facebook, haciendo de esta manera cada transaccion, transparente y directa</p>
        <p></p></div>
      </div>
    </div>


</did><did class="container col-sm-4 "  id="cuadro"   > 
<div class="thumbnail well"   id="cuadro"  >

 <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
     <img src="img/entrega.png" width="35px" alt="..."> </a>
      <div class="caption">
       <h4 class="" id="subtitulo" style="color:#6d6d6d;" > Recibe tu producto</h4>


       <div  id="collapse3" class="panel-collapse collapse">
        <p class="text-justify text-muted" >Recibe tu compra en puntos centricos y seguros de la ciudad del Tigre, o segun tu eleccion la llevamos a tu domicilio, en caso de compra fuera de la zona realizamos envios por mrw, tealca, domesa y zoom </p> </div>
        <p></p>
      </div>
    </div>
</did>
     

</div>

  
         
  
    </div> <!-- /.row -->
</div> <!-- /.container -->





</section>





<section id="contacto">
    








     <hr class="featurette-divider">



     <!--REDES SOCIALES   -->


<div class="container">
    <div class="row">
<div class="text-center">




     

</div>


  
         
  
    </div> <!-- /.row -->
</div> <!-- /.container -->





</section>




</body> 

     <footer class="container col-lg-10"> 



      <p>
<h5 id="pie"><strong> © 2017  Desarrollado por <a>Jose Castillo</a>  | <a>Contactanos  </a>| Topsventas.com.ve un emprendimiento e-commerce, radicados en El Tigre, estado Anzoategui    </strong></h5>   </p>
      </footer>


    </div><!-- /.container contenedor-->



















   <script src="js/jquery.js  " ></script>
  <script src="js/script.js " ></script> 

  <script src="js/bootstrap.min.js"></script>
     <script src="js/pace.min.js  " ></script>
      

</html> 
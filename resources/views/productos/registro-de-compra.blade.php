<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="{{ asset('img/favicon.png  ') }}  "  rel="shortcut icon" >


 
    <title> Economik  │ {{$productos->titulo }}       </title>

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
    <li><a href="{{ url('/') }}  ">Inicio</a></li>
    <li><a href="#">Productos</a></li>
    <li class="active"><span> {{$productos->titulo }}   </span></li>
  </ol>
</div>








<section id="lista-productos"   >





    <div class="">
      <div class="container"    >
        <div class="wrapper row ">      
          <div class="preview col-md-4">
              
            <div class=" tab-content "   >





 <label class="label label-warning   " style="font-size: 15px;" > {{  $productos->estado }}    </label>










              <div class="tab-pane active  img-responsive      " id="pic-1">

           

              <img class="img-responsive  " src="    {{ asset('img/productos/cargador.jpg ') }}" /></div>
              <div class="tab-pane  " id="pic-2"><img src="{{ asset('img/productos/cargador.jpg ') }}" /></div>
              <div class="tab-pane" id="pic-3"><img src=" {{ asset('img/productos/cargador3.jpg  ') }} " /></div>
              <div class="tab-pane" id="pic-4"><img src="{{ asset('img/productos/cargador4.jpg   ') }}" /></div>
              <div class="tab-pane" id="pic-5"><img src="  {{ asset('img/productos/cargador5.jpg  ') }}" /></div>
            </div>
          
            <ul      id="panel-superior-precio" class="preview-thumbnail nav nav-tabs">









              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="  {{ asset('img/productos/cargador.jpg  ') }}      " /></a></li>



              <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('img/productos/cargador2.jpg ') }}" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src=" {{ asset('img/productos/cargador3.jpg') }} " /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ asset('img/productos/cargador4.jpg') }} " /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="{{ asset('img/productos/cargador5.jpg') }} " /></a></li>
            </ul>
            <label  id="precios" class="label label-warning btn-block"  >
<strong>
 <span id=""> Bs: {{  $productos->precio }}  </span> </strong>
</label>












          </div>
          <div class="details col-md-5">


         


               <div class="form-group " >






                        <h1  >  <i class="fa fa-gift" aria-hidden="true"></i>

 {{$productos->titulo }}  
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
{{$productos->descripcion1}}  

</p>


<p   id="caracteristicas" class="form-group">
<i class="fa fa-check text-success" aria-hidden="true"></i>
{{$productos->descripcion2}}  



</p>

<p  id="caracteristicas" class="form-group">

<i class="fa fa-check text-success" aria-hidden="true"></i>

{{$productos->descripcion3}}  
</p>

<p  id="caracteristicas" class="form-group">
<i class="fa fa-check text-success" aria-hidden="true"></i>

{{$productos->descripcion4}}  


</p>

<p  id="caracteristicas" class="form-group">


<i class="fa fa-check text-success" aria-hidden="true"></i>

{{$productos->descripcion5}}  

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
              <a   href ="{{ url('registro-de-compra', $productos->id) }}"  class="btn btn-success btn-sm  btn-block " type="button">


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


                  <div class="col-sm-4">


<div class="form-group ">
                     <center>      <h4>    <label class="label label-warning" for="nombre"  ><i class="fa fa-bookmark" aria-hidden="true"></i>
                             Registro de compra  </label></h4></center>
                          
                        </div> 

 <div class="form-group  col-sm-6 ">
                    
                            <input type="text"  size="10" class="form-control input-sm "   name="nombre" id="nombre" placeholder="Nombre" required />
                        </div> 

   <div class="form-group col-sm-6"  >
               
                            <input type="text" class="form-control input-sm"  name="nombre" id="nombre" placeholder="Apellido" required />
                        </div> 

 <div class="form-group col-sm-6 ">
             
                            <input type="text" class="form-control input-sm"  name="nombre" id="nombre" placeholder="Cedula" required />
                        </div> 

 <div class="form-group col-sm-6 ">
                   
                            <input type="text" class="form-control input-sm"  name="nombre" id="nombre" placeholder="Telefono" required />
                        </div> 
                         <div class="form-group col-sm-12 ">
             
                            <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Correo" required />
                        </div> 




<div class="form-group col-sm-12">
       
                            <select  id="estadocivil" name="estadocivil" class="form-control" >
                                <option value="" selected="">Lugar de entrega:</option>
                                <option value="Soltero">San remo mall</option>
                                <option value="Casado">Unicasa</option>
                                       <option value="Otro">Centro comercial petrucci </option>
                                      <option value="Otro">Otro </option>
                               
                            </select>
                        </div>


<div class="form-group col-sm-12">

                            <select  id="estadocivil" name="estadocivil" class="form-control" >
                                <option value="" selected="">Opciones:</option>
                                <option value="Soltero">10 am</option>
                                <option value="Casado">11 am</option>
                                       <option value="Otro">2 pm </option>
                                      <option value="Otro">4 pm </option>
                               
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="estadocivil">
                            Forma de pago:</label>
                            <select  id="estadocivil" name="estadocivil" class="form-control" >
                                <option value="" selected="">Opciones:</option>
                                <option value="Soltero">Efectivo</option>
                                <option value="Casado">Transferencia</option>
                                       <option value="Otro">Deposito </option>
                                   
                               
                            </select>
                        </div>




    <button class=" btn btn-success  col-sm-12"  type="submit"><i class="glyphicon glyphicon-shopping-cart"   aria-hidden="true"></i>   Concretar Compra </button>



</form>





                   </div>
        </div>



      </div>

 
 </div>








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






















<section id="informacion" >




<div class="text-center ">
    <div class="col-lg-12">
<div class="container">



<did class="container col-sm-4 "  > 

<div class="thumbnail well">
      <img src="    {{ asset('img/pago.png        ') }}             "  width="35px" alt="...">
      <div class="caption">
   <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Tu Pago</h4>



        <p class="text-justify text-muted"  >Haz tus pagos de manera online, mediante transferencia bancaria o en efectivo, de manera personal al recivir tu compra. Nuestro mayor compromiso es la seriedad y transparencia en cada transaccion</p>
     
      </div>
    </div>


</did><did class="container col-sm-4" > 

<div class="thumbnail well">
      <img src="   {{ asset('img/reputacion.png         ') }}          " width="35px" alt="...">
      <div class="caption">
      <h4 class="" id="subtitulo" style="color:#6d6d6d;" >Seguridad</h4>
        <p  class="text-justify  text-muted"> Economik.com.ve proporciona informacion de sus responsables, ademas que podras ver las opiniones de otros usuarios, en nuestra pagina en facebook, haciendo de esta manera cada transaccion, transparente y directa</p>
        <p></p>
      </div>
    </div>


</did><did class="container col-sm-4 "  id="cuadro"   > 
<div class="thumbnail well"   id="cuadro"  >
      <img src="      {{ asset('img/entrega.png         ') }}         " width="35px" alt="...">
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



   <script src="{{ asset('js/jquery.js   ') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>


  <script src="  {{ asset('js/script.js  ') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        

 

  


</html> 
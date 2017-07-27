<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="{{ asset('img/favicon.png  ') }}  "  rel="shortcut icon" >


 
    <title> Sighca │     </title>

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
<i class="fa fa-university" aria-hidden="true"></i>
Sighca <i class="fa fa-clock-o" aria-hidden="true"></i>  
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
        <button title="Busca un articulo" class="btn btn-success btn-circle " type="button"> <i class="fa fa-search" aria-hidden="true"></i>    Buscar</button>
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
    <li><a href="">Busqueda</a></li>
    <li class="active"><span>     </span></li>
  </ol>
</div>




<section   id="lista-productos"     >   
 
  





    <div class="">
      <div class="container "    >
        <div class="wrapper row ">      

  <div class="col-md-12">



<div class="  panel panel-default  ">
  <div class="panel-heading   ">
                        <h4 > <i class="fa fa-address-card-o" aria-hidden="true"></i> Datos personales



  </h4>  


   </div>





  <div class="panel-body ">




          <div class="col-md-12 ">

<div class="panel panel-default">
 <i class="fa fa-id-badge" aria-hidden="true"></i>
      Jose, Gregorio, Castillo Coronel

 

  <div class="panel-body ">



  <div class=" col-md-12 col-lg-12 table-responsive  ">
                             <br>
                                <table class="table table-responsive">


                                    <tbody   >


                
 <br>
                                    <tr>
                                        <td  id="dato"  title="Nombres"><i class="fa fa-user" aria-hidden="true"></i> Jose Gregorio </td>
                                        <td id="dato" title="Apellidos" ><i class="fa fa-user-circle-o" aria-hidden="true"></i> Castillo, Castillo </td>

                                        <td  id="dato" title="Cedula"  ><i class="fa fa-id-card" aria-hidden="true"></i> 24845258  </td>
                                        <td  id="dato" title="Correo" > <i class="fa fa-envelope" aria-hidden="true"></i> jcastillovnz@gmail.com</td>

                                    </tr>



                                    <tr>
                                        <td id="dato"   ><i class="fa fa-id-badge" aria-hidden="true"></i>   Cargo: Profesor </td>
                                        <td id="dato" title="Regimen horario" ><i class="fa fa-clock-o" aria-hidden="true"></i> Regimen: Diurno </td>
                                            <td id="dato" title="Profesion"  ><i class="fa fa-certificate" aria-hidden="true"></i> Ingeniero de sistemas  </td>
                                        <td  id="dato" title="Telefono" ><i class="fa fa-phone-square" aria-hidden="true"></i> 04141948033 </td>

                                    </tr>
                         
                                           <tr>
                                        <td id="dato"   > </td>
                                        <td id="dato" > </td>
                                            <td id="dato"  >  </td>
                                        <td  id="dato"  ></td>

                                    </tr>
                         
                                 
                                



                                    </tbody>


                                </table>
                            </div>










cuerpo
</div>
</div>
</div>




















                  <div class="col-md-12">


















<div class="panel panel-default">
  <div class="panel-heading">
                                          <h4 > <i class="fa fa-calendar" aria-hidden="true"></i> Horas asignadas </h1>

   

  </h4>   </div>




  
  <div class="panel-body">



<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>

          <th  class=" success"> <small><i class="fa fa-clock-o" aria-hidden="true"></i> Horas</small> </th>
            <th class=" success"> <small>   Lunes </small> </th>
            <th class=" success"><small>    Martes  </small>   </th>
            <th class=" success"><small>   Miercoles  </small> </th>
            <th class=" success"><small>   Jueves   </small></th>
            <th class=" success"><small>   Viernes   </small></th>
            <th class=" success"><small>   Sabado </small></th>
  
        
        </tr>
    </thead>
    <tbody>
        <tr>

         <td  class=" warning" > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  07:00 - 07:45</small>   </td>
            <td><i class="fa fa-check-square-o text-success" aria-hidden="true"></i></td>
            <td>Libre</td>
            <td>...</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>

         
        </tr>
        <tr>

         <td  class=" warning"   >  <small><i class="fa fa-clock-o" aria-hidden="true"></i> 07:45 - 08:30</small> </td>
            <td>....</td>
            <td>....</td>
            <td>.....</td>
            <td>.....</td>
            <td>....</td>
            <td>....</td>

     
      </tr>



   <tr>

         <td   class=" warning"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i> 08:30 - 09:15</small>  </td>
            <td>....</td>
            <td>....</td>
            <td>.....</td>
            <td>.....</td>
            <td>....</td>
            <td>....</td>

     
      </tr>


         <tr>

         <td   class=" warning"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   09:15 - 10:00 </small></td>
            <td>....</td>
            <td>....</td>
            <td>.....</td>
            <td>.....</td>
            <td>....</td>
            <td>....</td>
 
     
      </tr>









        <tr>

         <td   class=" warning"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>  10:00 - 10:45  </small></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
           
           
        </tr>

   <tr>

         <td   class=" warning"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   10:45 - 11:30 </small>  </td>
            <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
        
        </tr>   <tr>

         <td  class=" warning"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   11:30 - 12:15  </small> </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr>   <tr>

         <td  class=" warning"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>    12:15 - 01:00 </small> </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
      
           
        </tr>   <tr>

         <td  class=" warning"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   01:00 - 01:45  </small></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
      
           
        </tr>   <tr>

         <td   class=" warning"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   01:45 - 02:30 </small></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
       
           
        </tr>   <tr>

         <td   class=" warning"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  02:30 - 03:15  </small> </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr>


 <tr>

         <td   class=" warning"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  03:15 - 04:00 </small>   </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td    class=" warning" ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   04:00 - 04:45 </small>  </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td   class=" warning" ><small> <i class="fa fa-clock-o" aria-hidden="true"></i>  04:45- 05:30 </small>  </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td    class=" warning" > <small><i class="fa fa-clock-o" aria-hidden="true"></i>    05:30 - 06:15 </small>  </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td   class=" warning" ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   06:15 - 07:45  </small></td>
            <td>...</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td   class=" warning" > <small><i class="fa fa-clock-o" aria-hidden="true"></i>   07:45 - 08:30   </small></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr>




            </tbody>
</table>
</div>




</div>



</div>










               



</div> <!-- CIERRE DE PANEL -->

</div>  <!-- CIERRE DID LG 12 -->







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

Nº Profesores:    
</strong>


 



   </center>
 <hr> 
            </div>
        </div>
      
        <div class="col-xs-12 col-xs-4" >
              <div class="">



  <center id="">




<strong   id="" > 

Nº Infraestructura:  
</strong>
</center>
 <hr> 
            </div>
        </div>
       
        <div class="col-xs-12 col-xs-4" >
        <div class="">
<center id="">




<strong   id="" > 
Nº Pensum: 
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
 
</section>

    

    




















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
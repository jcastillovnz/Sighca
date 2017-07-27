<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token() }}">


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


<ul  class="nav navbar-nav navbar-center">
  




      <form class="navbar-form navbar-center">




        <div class="form-group">
 <div class="input-group  ">
      <input type="text" class="form-control  btn-circle ">
      <span class="input-group-btn   ">
        <button title="Haz una busqueda" class="btn btn-success btn-circle " type="button"> <i class="fa fa-search" aria-hidden="true"></i>    Buscar</button>
      </span>
    </div>
</form> 
</div>







</ul>







      <ul   class="nav navbar-nav navbar-right">

       

   <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

<strong>
                Registros</strong>

                <span class=""></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Profesores</a></li>
                  <li><a href="#">Horarios</a></li>
                  <li><a href="#">Pensum</a></li>


                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Crear registro</li>
                  <li><a href="#">Profesor</a></li>
                  <li><a href="#">Pensum</a></li>
                </ul>
              </li>



<li>

<a  id="linea-vertical"  href="">
&vert;

</a>
</li>




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
  







<body>



























<div   id="separador"   class="separador">

</div>


<div class="container azul">
    <ol class="breadcrumb breadcrumb-arrow ">
    <li><a href="{{ url('/') }}">Inicio</a></li>
    <li><a href="">Busqueda</a></li>
    <li class="active"><span>     </span></li>
  </ol>
</div>




<section  id="lista-productos"     >   
 
  





    <div class="">
      <div class="container"    >



<form class="">




        <div class="form-group">
 <div class="input-group  ">
      <input type="text" class="form-control   ">
      <span class="input-group-btn   ">
        <button title="Haz una busqueda" class="btn btn-success  " type="button"> <i class="fa fa-search" aria-hidden="true"></i>    Buscar</button>
      </span>
    </div>
</form> 
</div>



        <div class="wrapper row ">      






          <div class=" col-md-3">






<div class="panel panel-default">
  <div class="panel-heading">

<center>
      <small>       <strong>     <i class="fa fa-search" aria-hidden="true"></i> Filtrado por:</strong> 
</small>     </center>


 










   </div>





  <div class="panel-body">



<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control form-control-lg" >
                                <option value="" selected="">Carrera</option>
                                <option value="El tigre">Sistemas</option>
                                <option value="San jose de guanipa">Petroleo</option>
                                      <option value="San tome">Enfermeria</option>
                               
                            </select>
                        </div>







<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control" >
                                <option value="" selected="">Seccion</option>
                                <option value="El tigre">Sistemas</option>
                                <option value="San jose de guanipa">Petroleo</option>
                                      <option value="San tome">Enfermeria</option>
                               
                            </select>
                        </div>




<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control" >
                                <option value="" selected="">Pensum</option>
                                <option value="El tigre">Sistemas</option>
                                <option value="San jose de guanipa">Petroleo</option>
                                      <option value="San tome">Enfermeria</option>
                               
                            </select>
                        </div>



<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control" >
                                <option value="" selected="">Asignatura</option>
                                <option value="El tigre">Sistemas</option>
                                <option value="San jose de guanipa">Petroleo</option>
                                      <option value="San tome">Enfermeria</option>
                               
                            </select>
                        </div>








</div>


   
</div>





          </div>








                  <div class="col-md-9">





<div class="panel panel-default">
  <div class="panel-heading">
                                <small>   <strong>   <i class="fa fa-eye" aria-hidden="true"></i> Usted esta viendo 1 de 10 resultados</strong>  
                                 </small> 
    <h4 class="pull-right">
<i class="fa fa-bookmark azul" aria-hidden="true"></i> </h4> 

  </div>












  




</div>













               



   <div class="row ">
            <div class="col-sm-12">
                <div class="panel panel-default">

                  <div id="metadato" class="panel-heading">

<span class="azul">


             
12    <i class="fa fa-file-text" aria-hidden="true"></i>  

│

12/02/2017   <i class="fa fa-retweet" aria-hidden="true"></i>       

</span>




                              
                             
    <h4 class="pull-right">
<i class="fa fa-bookmark azul" aria-hidden="true"></i> </h4> 

  </div>
 
                    <div class="panel-body ">
              


                    
                     
                         

<div id="dato"  align="left"    class="col-md-4 azul">
<strong>
 Nombre: Jose Castillo  </strong>
  </div>
                           
  

<div id="dato"   align="left"    class="col-md-4">

<strong>
<span >Cedula:
 24845258</span>  </strong>
    </div>

  
<div  id="dato" align="left"     class="col-md-4">
<strong>
Profesion:
 Ingeniero de sistemas
</strong>
    </div>



<div id="dato"  align="left"    class="col-md-4">
<span >
<strong>
Telefono:
04141948033  
</strong>
  </div>
                           
  

<div id="dato"   align="left"    class="col-md-4">
<strong>
Correo:
jcastillovnz@gmail.com</span></strong>

    </div>

  
<div  id="dato" align="left"     class="col-md-4">

<strong>
Cargo:
  Profesor</strong>
    </div>

                     
 
<div class="col-lg-12" align="right">
 <a class="btn btn-success btn-xs"    href="{{ url('/register') }}"  >  

<strong><i class="fa fa-file-text-o" aria-hidden="true"></i>   Detalle  </strong>   </a>  </div>














                        </div>
                    </div>







                    </div>
                </div>
            </div>
    




     

















 </div>
        </div>



      </div>



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






















   <script src="{{ asset('js/jquery.js') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>


  <script src="  {{ asset('js/script.js') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        

 

  


</html> 
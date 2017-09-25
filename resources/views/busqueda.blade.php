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



<form         role="form" action="{{ url('/busqueda') }}"
 method="GET"   >
{{ csrf_field() }}




        <div class="form-group">
 <div class="input-group  ">
      <input type="text" id="buscar" name="buscar" class="form-control   ">
      <span class="input-group-btn   ">
        <button title="Haz una busqueda" class="btn btn-success  " type="submit"> <i class="fa fa-search" aria-hidden="true"></i>    Buscar</button>
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
                           
                            <select  id="ciudad" name="ciudad" class="form-control form-control-lg" >
                                <option value="" selected="">Carrera</option>
                                <option value="El tigre">Sistemas</option>
                                <option value="San jose de guanipa">Petroleo</option>
                                      <option value="San tome">Enfermeria</option>
                               
                            </select>
                        </div>


<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control form-control-lg" >
                                <option value="" selected="">Carrera</option>
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

@if (isset($message))

 <small>   <strong>   <i class="fa fa-eye" aria-hidden="true"></i> Usted esta viendo 0 resultados</strong>  
                                 </small> 
@endif

              @if (isset($profesores))
                  <small>   <strong>   <i class="fa fa-eye" aria-hidden="true"></i> Usted esta viendo  {{ $profesores->count() }}   de {{ $profesores->count() }} resultados</strong>  
                                 </small> 

@endif





                            
    <span  style="float: right; padding-right: 20px; font-size: 17px;"  >
<i class="fa fa-bookmark azul" aria-hidden="true"></i> </span > 

  </div>












  




</div>






@if (isset($message))




   <div class="row ">
            <div class="col-sm-12">
                <div class="panel panel-default">

                  <div id="metadato" class="panel-heading">

<span class="azul">

<span style="padding-left: 16px;"  title="Id" style="font-size: 12px;" class="text-success" >
<i class="fa fa-barcode" aria-hidden="true"></i> </span > 

</span>




                              
                            
    <span  style="float: right; padding-right: 20px; font-size: 17px;"  >
<i class="fa fa-bookmark azul" aria-hidden="true"></i> </span > 

  </div>
 







                    <div class="panel-body ">
              



                    
                     <div class='' style='height:  125px ;font-size:25px;'>


  <center>  <i style="color:#f0d913; padding-top: 5%;" class="fa fa-exclamation-triangle  " aria-hidden="true"></i>      {{$message}}  <strong>{{$buscar}} </strong> </center> 
</div>
          </div>
                    </div>
                    </div>
                </div>
            </div>






















@endif







              @if (isset($profesores))
   
  @foreach ($profesores as $n  )  
 



   <div class="row ">
            <div class="col-sm-12">
                <div class="panel panel-default">





                  <div id="metadato" class="panel-heading">



    <span style="padding-left: 16px;"  title="Id" style="font-size: 12px;" class="text-success" >
<i class="fa fa-barcode" aria-hidden="true"></i> {{    $n-> id }}</span > 


 








                              
                    


                            
    <span  style="float: right; padding-right: 20px; font-size: 17px;"  >
<i class="fa fa-bookmark azul" aria-hidden="true"></i> </span > 


  </div>
 







                    <div    class="panel-body ">
              



                    
                     
                         








<div id="dato"  align="left" style="padding-left: 12%; padding-right: 12%; "   class="col-md-4 col-md-4 ">



<img id="foto" class="img-responsive" alt="Foto de perfil" align="center" src="img/perfil.png" width="150"  height="300" >






  </div>
                           
  




<div style="font-size: 13px"   align="left"    class="col-md-4">

<strong>
<span >Nombre:     </strong>   {{    $n-> nombre }}  {{    $n-> apellido }}       </span> 
    </div> 

  
<div  style="font-size: 13px"  align="left"     class="col-md-4">
<strong>Cedula:</strong> {{    $n-> cedula }}   
 


    </div>


<div style="font-size: 13px"    align="left"    class="col-md-4">
<strong>Telefono celular:       </strong> {{    $n-> telefonocelular }} 

    </div>



<div style="font-size: 13px"    align="left"    class="col-md-4">
<strong>Telefono fijo:       </strong> {{    $n-> telefonofijo }} 

    </div>







<div style="font-size: 13px"   align="left"    class="col-md-4">

<strong>Profesion:    </strong>{{    $n-> profesion }} 



  </div>
                           
  



  
<div  style="font-size: 13px"  align="left"     class="col-md-4">

<strong>Correo:   </strong>{{    $n-> correo }} 


    </div>


<div  style="font-size: 13px"  align="left"     class="col-md-8">

<strong>Residencia:</strong> {{    $n-> residencia }} 

    </div>
                     
 















<div class="col-lg-12" align="right">

@if (Auth::guest())




    <a class="btn btn-success btn-sm"    href="{{ url('/register') }}"  >  

<strong><i class="fa fa-calendar" aria-hidden="true"></i> Detalle  </strong>   </a>  </div>


  @else
<a  href="{{ url('asignar-profesor', $n->id) }}" class="btn btn-default btn-sm" >

<strong><i class="fa fa-calendar-o" aria-hidden="true"></i>  Asignar Horario </strong>   </a> 






<input class="hidden" id="id" name="id" value="{{    $n-> id }}">







<a  href="{{ url('detalle-profesor', $n->id) }}" class="btn btn-success btn sm">


<i class="fa fa-calendar" aria-hidden="true"></i> 
{{ csrf_field() }}
Detalle  


</a>  


</div>

@endif







                        </div>


                    </div>








                    </div>




                </div>


        @endforeach  
@endif


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




<center>
<hr>

<h5 id="pie"    >   © Desarrollado por <a><i class="fa fa-code" aria-hidden="true"></i>  Jose Castillo, Leonellys Rojas  </a>   | <a href="https://www.economik.com.ve"> <i class="fa fa-globe" aria-hidden="true"></i>  Sighca </a>  Como solucion a nuestro caso de trabajo especial de grado. UNEFA, San Tome, 2017  </h5> 

</center>




</div>



</footer>



















   <script src="{{ asset('js/jquery.js') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>


  <script src="  {{ asset('js/script.js') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        

 

  


</html> 
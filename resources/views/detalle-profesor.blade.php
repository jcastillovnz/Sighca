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
       <link href="{{ asset('css/tecnicas.css') }}" rel="stylesheet">
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
    <li><a href=""> {{ $profesores->nombre}}  {{ $profesores->apellido}} </a></li>
    
  </ol>
</div>






<section  id="seccion"     >   
 
  

 


      <div class="container"    >


        <div id="main" class="wrapper row ">      

                  <div class="col-md-12">

   <div class="row ">
     <div class="col-sm-12">

 
     <div class="panel panel-default">
 

  <div  class="panel-heading">

<span  style="padding-left: 20px; "  class=" " >

<i class="fa fa-user-circle-o" aria-hidden="true"></i>
<strong>
Perfil de
Profesor</strong>

</span>





<span class=""  style="float: right; padding-right: 20px;">
  


<a  title="Modificar" class="btn btn-warning btn-sm" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </a>


<a  title="Eliminar" class="btn btn-danger btn-sm" href=""><i class="fa fa-trash-o" aria-hidden="true"></i>   </a>



</span>






 </div>


 <div class="panel-body ">
         

     

<div id="dato"  align="left" style="padding-left: 12%; padding-right: 12%; padding-bottom: 20px;  padding-top: 20px; "   class="col-md-4 col-md-4 ">



<img id="foto" class="img-responsive" alt="Foto de perfil" align="center" src=" {{ asset('img/perfil.png    ') }} " width="200"  height="500" >






  </div>
                           


<div class="form-group col-sm-4">
 <strong> Nombre: </strong>         {{ $profesores->nombre}}  {{ $profesores->apellido}}
</div>




<div class="form-group col-sm-4">
 <strong> Cedula: </strong>         {{ $profesores->cedula }}
</div>


<div class="form-group col-sm-4">
<strong> Telefono fijo: </strong>     {{ $profesores->telefonofijo }}
</div>


<div class="form-group col-sm-4">
<strong> Telefono celular: </strong>     {{ $profesores->telefonocelular }}
</div>

<div class="form-group col-sm-4">
<strong> Profesion: </strong>     {{ $profesores->profesion }}
</div>


<div class="form-group col-sm-4">
<strong> Correo: </strong>     {{ $profesores->correo }}
</div>

<div class="form-group col-sm-8">
<strong> Residencia: </strong>     {{ $profesores->residencia }}
</div>








<div class="form-group col-sm-12">
<center>

<span class="btn-success btn btn-sm"> <i class="fa fa-address-book" aria-hidden="true"></i>     Matematica </span>
<span class="btn-success btn btn-sm"> <i class="fa fa-address-book" aria-hidden="true"></i>     Matematica </span>
<span class="btn-success btn btn-sm"> <i class="fa fa-address-book" aria-hidden="true"></i>     Matematica </span>

<span class="btn-success btn btn-sm"> <i class="fa fa-address-book" aria-hidden="true"></i>     Matematica </span>



<span class="btn-success btn btn-sm"> <i class="fa fa-address-book" aria-hidden="true"></i>     Matematica </span>



</center>

</div>










                    </div>
                    </div>





                    </div>





                </div>
            </div>
    




  


             </div>











   <div class="row ">
            <div class="col-sm-12">











                <div class="panel panel-default">
 
  <div  class="panel-heading">

<span  style="padding-left: 20px; "  class="" >

<i class="fa fa-calendar" aria-hidden="true"></i>
<strong>

Horario asignado</strong>

</span>





<span class=""  style="float: right; padding-right: 20px;">
  
<a  href="" title="Asignar"   class="btn btn-success btn-sm" >

<strong><i class="fa fa-thumb-tack" aria-hidden="true"></i></strong>   </a> 



<a  title="Modificar" class="btn btn-warning btn-sm" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>



</span>


   </div>






                    <div class="panel-body ">
              





<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>

          <th  class=" success"   >  <center> <small><i class="fa fa-clock-o" aria-hidden="true"></i> Horas</small></center> </th>
            <th class=" success"    > <center> <small>   Lunes </small></center> </th>
            <th class=" success"   > <center><small>    Martes  </small> </center>  </th>
            <th class=" success"   > <center>  <small>   Miercoles  </small> </center></th>
            <th class=" success"    > <center> <small>   Jueves   </small></center></th>
            <th class=" success"    ><center>  <small>   Viernes   </small></center> </th>
            <th class=" success"     ><center>  <small>   Sabado </small></center> </th>
  
        
        </tr>
    </thead>
    <tbody>
        <tr>

         <td  class=" warning hora" align="center"  >  <small><i class="fa fa-clock-o" aria-hidden="true"></i> 07:00 - 07:45</small> </td>
             <td  class="success nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)"    >


             </td>




            <td   class="  nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
           <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>







            <td   class=" nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="success nombre"  align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
      <td  class="info nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>

         
        </tr>
        <tr>

         <td  class=" warning hora" align="center"   >  <small><i class="fa fa-clock-o" aria-hidden="true"></i> 07:45 - 08:30</small> </td>
        <td   class="success nombre"  align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class=" nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
         <td   class="success nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
            <td   class=" nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="success  nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>

     
      </tr>



   <tr>

         <td   class=" warning hora" align="center"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i> 08:30 - 09:15</small>  </td>
          <td   class="success nombre" align="center"   ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
         <td   class="  nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="success nombre" align="center"   ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="  nombre"  align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
           <td   class="success nombre"  align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
         <td   class="info nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>

     
      </tr>


         <tr>

         <td   class=" warning hora" align="center"    ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   09:15 - 10:00 </small></td>
 <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"   ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
 
     
      </tr>









        <tr>

         <td   class=" warning hora" align="center"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>  10:00 - 10:45  </small></td>
   <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
           
           
        </tr>

   <tr>

         <td   class=" warning hora" align="center"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   10:45 - 11:30 </small>  </td>
    <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        
        </tr>   <tr>

         <td  class=" warning hora" align="center"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   11:30 - 12:15  </small> </td>
    <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
           
        </tr>   <tr>

         <td  class=" warning hora" align="center"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>    12:15 - 01:00 </small> </td>
      <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
      
           
        </tr>   <tr>

         <td  class=" warning hora" align="center"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   01:00 - 01:45  </small></td>
      <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
      
           
        </tr>   <tr>

         <td   class=" warning hora" align="center"    ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   01:45 - 02:30 </small></td>
      <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       
           
        </tr>   <tr>

         <td   class=" warning hora" align="center"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  02:30 - 03:15  </small> </td>
         <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>

           
        </tr>


 <tr>

         <td   class=" warning hora" align="center"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  03:15 - 04:00 </small>   </td>
     <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td  class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>


           
        </tr> <tr>

         <td    class=" warning hora"  align="center"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   04:00 - 04:45 </small>  </td>
     <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td  class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>


           
        </tr> <tr>

         <td   class=" warning hora" align="center"   ><small> <i class="fa fa-clock-o" aria-hidden="true"></i>  04:45- 05:30 </small>  </td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>

           
        </tr> <tr>

         <td    class=" warning hora" align="center"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>    05:30 - 06:15 </small>  </td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td  class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>


           
        </tr> <tr>

         <td   class=" warning hora" align="center"    ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   06:15 - 07:45  </small></td>
     <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>


           
        </tr> <tr>

         <td  align="center"  class=" warning hora" > <small><i class="fa fa-clock-o" aria-hidden="true"></i>   07:45 - 08:30   </small></td>
      <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
   <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
        <td   class="  nombre" align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
       <td   class="success nombre"  align="center" ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>
          <td   class="info nombre" align="center"  ondrop="drop(event)" ondragover="allowDrop(event)""     type="text" name=""  ></td>

           
        </tr>




            </tbody>
</table>
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

<h5 id="pie"    >   © Desarrollado por <a><i class="fa fa-code" aria-hidden="true"></i>  Jose Castillo, Leonellys Rojas  </a>   | <a href="{{ url('/home') }}"> <i class="fa fa-globe" aria-hidden="true"></i>  Sighca </a>  Como proyecto de trabajo especial de grado. UNEFA, San Tome, 2017  </h5> 

</center>






</div>



</footer>





















  <!-- Plugin JavaScript -->

   <script src="{{ asset('js/jquery.js   ') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>
 <script src="{{ asset('js/vue.js   ') }}   " ></script>

  <script src="  {{ asset('js/script.js  ') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        



  


</html> 
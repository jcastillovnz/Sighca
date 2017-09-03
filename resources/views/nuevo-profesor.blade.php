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
    <li><a href="">Nuevo profesor </a></li>
    
  </ol>
</div>






<section  id="lista-productos"     >   
 
  





    <div class="">






      <div class="container"    >














        <div id="main" class="wrapper row ">      


                  <div class="col-md-12">



   <div class="row ">
            <div class="col-sm-12">


                <div class="panel panel-default">
 

  <div  class="panel-heading">

  <span  style="padding-left: 20px;          font-size: 15px;">


<strong><i class="fa fa-plus-circle" aria-hidden="true"></i>
Nuevo
profesor</strong>


</span >






</span >


















   </div>


















                    <div class="panel-body ">
              


<!-- BLOQUE SECCION -->




<div id="formulario"> 

<form class="navbar-form navbar-center" role="form" action="{{ url('/guardar-profesor') }}"
 method="GET"    >{{ csrf_field() }}

 </div>

<div class="form-group col-sm-4">  




<div class="well"  style="font-size: 40px;   height: 255px;">
<center style="padding-top: 22%"   >


<i class="fa fa-graduation-cap" aria-hidden="true"></i>
Profesor

</center>
</div>
</div>









<div class="form-group col-sm-4"     >
<div class="input-group"   title="Regimen">
<span class="input-group-addon"><span class="fa fa-user-circle-o"></span></span>
 <input type="text"  title="Nombre" class="form-control" name="nombre"   id="nombre"   placeholder="Nombre" required />
 </div>
</div>




<div class="form-group col-sm-4"    >
 
                       
<div class="input-group"   title="Regimen">
 <span class="input-group-addon"><span class="fa fa-user-circle-o"></span></span>
 <input type="text"  title="Apellido" class="form-control" name="apellido"   id="apellido"   placeholder="Apellido"  required />
 </div>
@if($errors->has('foto'))


<center>Hubo un error</center>


@endif


</div>

<div class="form-group col-sm-4"      >
<div class="input-group"   title="Regimen">
<span class="input-group-addon"><span class="fa fa-picture-o"></span></span>
 <input type="file"  title="Foto" class="form-control" name="foto"   id="foto"   placeholder="Foto"  />
 </div>

@if($errors->has('foto'))


<center>Hubo un error</center>


@endif

</div>





<div class="form-group col-sm-4"    >
 
<div class="input-group"   title="Cedula">
<span class="input-group-addon"><span class="fa fa-id-card"></span>
</span>
<input type="number"  title="Cedula" class="form-control" name="cedula"   id="cedula"   placeholder="Cedula" required />
</div>

@if($errors->has('cedula'))
<script type="text/javascript">

$(document).ready(function(){

 alertify.error('  <center >  <strong> <i style="color: #dff442;" class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span style="color: #ffffff;" >  Cedula ya registrada</span> </strong>    </center>    ') ;


});
</script>





<style type="text/css">
  

#cedula{

    border: 1px solid red;
}

</style>






@endif

</div>




<!-- Segunda fila -->

 
<div class="form-group col-sm-4"   title="Telefono celular"  >
<div class="input-group"  >
<span class="input-group-addon"><span class=" fa fa-phone-square"></span></span>
 <input type="tel"  title="Telefono celular" class="form-control" name="telefonocelular"   id="telefonocelular"   placeholder="Telefono celular" required />
 </div>
</div>



<div class="form-group col-sm-4"   title="Telefono fijo"   >
<div class="input-group"   title="Telefono fijo">
<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt    "></span></span>
 <input type="tel"  title="Telefono fijo" class="form-control" name="telefonofijo"   id="telefonofijo"   placeholder="Telefono fijo"  />
 </div>
</div>


<!-- Segunda fila -->


<div class="form-group col-sm-4"    title="Profesion"    >
<div class="input-group"   title="Profesion">
<span class="input-group-addon"><span class="fa fa-graduation-cap"></span></span>
 <input type="text"  title="Profesion" class="form-control" name="profesion"   id="profesion"   placeholder="Profesion" required />
 </div>
</div>






















<div class="form-group col-sm-4"       >
 
                       
<div class="input-group"   title="Correo">
 <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
 <input type="text"  class="form-control" name="correo"   id="correo"   placeholder="Correo"  required />
 </div>

</div>





<div class="form-group col-sm-8"        >
 
<div class="input-group"   title="Cargo">
<span class="input-group-addon"><span class="fa fa-street-view"></span>
</span>
<input type="text"  title="Residencia" class="form-control input-sm" name="residencia"   id="residencia"   placeholder="Residencia" required />
</div>
</div>



<div class="form-group col-sm-4"        >
@if (isset($mensaje))



<script type="text/javascript">

$(document).ready(function(){

 alertify.success('  <center style="color: #fff;" > <strong> <i class="fa fa-check-circle" aria-hidden="true"></i> {{$mensaje}} </strong>    </center>    '), 'success','20'   ;

});
</script>





@endif


</div>

<div class="form-group col-sm-4"        >
 


<button class="btn btn-success btn-sm btn-circle pull-right     "><i class="fa fa-check-circle" aria-hidden="true"></i> Guardar</button>
</div>


</form>







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



<center>
<hr>

<h5 id="pie"    >   © Desarrollado por <a><i class="fa fa-code" aria-hidden="true"></i>  Jose Castillo, Leonellys Rojas  </a>   | <a href="{{ url('/home') }}"> <i class="fa fa-globe" aria-hidden="true"></i>  Sighca </a>  Como proyecto de trabajo especial de grado. UNEFA, San Tome, 2017  </h5> 

</center>






</div>



</footer>












  <!-- Plugin JavaScript -->

  


  <script src="  {{ asset('js/script.js  ') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        



  


</html> 
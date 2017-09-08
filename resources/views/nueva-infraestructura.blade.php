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
    <li><a href="">Nueva infraestructura </a></li>
    
  </ol>
</div>






<section  id="seccion"     >   
 
  





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
Nueva infraestructura  



<span style="padding-left: 20px">
<i class="fa fa-building" aria-hidden="true"></i>

</span>



 
   </strong>


</span >






</span >
















   </div>
















                    <div class="panel-body ">
              


  













<!-- BLOQUE SECCION -->


<div id="formulario"> 

<form class="navbar-form navbar-center" role="form" action="{{ url('/guardar-infraestructura') }}"
 method="GET"    >{{ csrf_field() }}

 </div>






<!-- 1 -->
@if (empty(   $numeroaulas)  )
@if (empty(   $nombreedificios)  )
@if (empty(   $nombreinfraestructura)  )


<div class="form-group col-sm-4">  

<div class="well"  style="font-size: 30px;   height: 255px;">
<center style="padding-top: 25%"   >


<i class="fa fa-building" aria-hidden="true"></i>
Infraestructura

</center>
</div>
</div>



<div class="form-group col-sm-8">
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-building"></span>
</span>
<input type="text"  title="Nombre" class="form-control " name="nombreinfraestructura"   id="nombreinfraestructura"   placeholder="Nombre de infraestructura"  required /></div>
</div>

<div class="form-group col-sm-8">
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-globe"></span>
</span>
<input type="text"  title="Ubicacion" class="form-control " name="ubicacion"   id="ubicacion"   placeholder="Ubicacion"  required /></div>
</div>


<div class="form-group col-sm-8">
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-phone-square"></span>
</span>
<input type="tel"  title="Telefono" class="form-control " name="telefono"   id="telefono"   placeholder="Telefono (Opcional)"   /></div>
</div>


<div class="form-group col-sm-8">
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-envelope"></span>
</span>
<input type="email"  title="Correo" class="form-control " name="correo"   id="correo"   placeholder="Correo (Opcional)"   /></div>
</div>


<div class="form-group col-sm-8">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-hashtag" aria-hidden="true"></i>
</span>
<input type="number"  title="Numero de edificios" class="form-control"  min="1" max="10" name="numeroedificios"   id="numeroedificios"   placeholder="Numero de Edificios" required /></div>
</div>




<div class="form-group col-sm-8">
<button class="btn btn-success btn-sm btn-circle  pull-right"  > <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  Continuar   </button>
</div>




@endif
@endif
@endif






<!-- 2 -->
@if   (isset($numeroedificios )   )

@for($i = 0; $i < $numeroedificios; $i++)



<div class="form-group col-sm-4">  




<div class="well"  style="font-size: 30px;   height: 255px;">
<center style="padding-top: 25%"   >

<input class="hidden" value="{{$numeroedificios}}" type="" id="numeroedificios" name="numeroedificios">
<i class="fa fa-building" aria-hidden="true"></i>
Edificio    {{$i+1}}

</center>
</div>
</div>


<div class="form-group col-sm-8">
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-building"></span>
</span>
<input type="text"  title="Nombre de edificio" class="form-control " name="nombreedificio"   id="nombreedificio"   placeholder="Nombre de edificio"  required /></div>
</div>





<div class="form-group col-sm-4">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-hashtag" aria-hidden="true"></i>
</span>
<input type="number"  title="Numero de aulas" class="form-control"  min="1" max="35" name="numeroaulas"   id="numeroaulas"   placeholder="Numero de Aulas" required /></div>
</div>

<div class="form-group col-sm-4">
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-building"></span>
</span>
<input type="text"  title="Prefijo aula" class="form-control " name="prefijoaula"   id="prefijoaula"   placeholder="Prefijo de aulas"  required /></div>
</div>



<div class="col-sm-8">








</div>






<div  style="padding-top: 1px; padding-bottom: 1px ;  margin: 0px" class="col-sm-12"><hr></div>


@endfor


<div class="form-group col-sm-12">
<button class="btn btn-success btn-sm btn-circle  pull-right" type="submit" > <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  Continuar   </button>
</div>
@endif





<!-- 3 -->
@if   (isset ($numeroaulas ))


{{var_dump($nombreedificio)}}
::::
{{var_dump($nominfraestructura)}}



@for($i = 0; $i < $nedificios; $i++)

 

<div class="form-group col-sm-4">  




<div class="well"  style="font-size: 30px;   height: 255px;">
<center style="padding-top: 25%"   >


<i class="fa fa-building" aria-hidden="true"></i>
Edificio    {{$i+1}}

</center>
</div>
</div>


<div class="form-group col-sm-8">
<strong>
Nombre de insfraestructura: {{$nominfraestructura}}    </strong>

</div>





<div class="form-group col-sm-4">
<strong>
Nombre de edificio: {{$nombreedificio}}     </strong>

</div>

<div class="form-group col-sm-4">
<strong>
Prefijo de aulas:</strong>

</div>


<div class="col-sm-8">


<p>
<center><i class="fa fa-check-circle text-success" aria-hidden="true"></i>
Aulas creadas</center></p>

@for($contador = 0; $contador < $numeroaulas; $contador++)


<span  class="btn btn-success btn-xs">
<strong>
<i class="fa fa-bookmark" aria-hidden="true"></i>
A {{$contador+1}}   
</strong>
</span>




@endfor




</div>






<div  style="padding-top: 1px; padding-bottom: 1px ;  margin: 0px" class="col-sm-12"><hr></div>


@endfor




<div class="form-group col-sm-12">
<button class="btn btn-success btn-sm btn-circle  pull-right" type="submit" > <i class="fa fa-check-circle" aria-hidden="true"></i>  Guardar </button>
</div>
@endif













  









</form> 












<!-- BLOQUE CIERRE -->


























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

   <script src="{{ asset('js/jquery.js   ') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>
 <script src="{{ asset('js/vue.js   ') }}   " ></script>

  <script src="  {{ asset('js/script.js  ') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        



  


</html> 
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
                Diseñar horario</strong>
</a>
             
              </li>



<li>

<a  id="linea-vertical"  href="">
&vert;
</a>
</li>










       

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






<div id="control" class="panel panel-default ">
  <div  class="panel-heading">

<center>
      <small>       <strong>    <i class="fa fa-mouse-pointer" aria-hidden="true"></i> Arrastre y suelte </strong> 
</small>     </center>


 










   </div>





  <div  class="panel-body">



<div class="form-group">
                           
                            <select  id="ciudad" name="ciudad" class="form-control form-control-lg" >
                                <option value="" selected="">Carrera</option>
                                <option value="El tigre">Sistemas</option>
                                <option value="San jose de guanipa">Petroleo</option>
                                      <option value="San tome">Enfermeria</option>
                               
                            </select>
                        </div>





<script type="text/javascript">
  
function allowdrop (ev){

ev.preventDefault()
document.getElementById ="caja2".classlist.add("detectar")


}



function drag (ev){

ev.trans()
document.getElementById ="caja2".classlist.add("detectar")


}








</script>


<div  align="center" draggable="true" ondragstart="drag(event)"   id="caja1" class="box text-success">


<i class="fa fa-bookmark" aria-hidden="true"></i>
Maximo romero 4582145

</div>






</div>


   
</div>





          </div>








                  <div class="col-md-9">


















               



   <div class="row ">
            <div class="col-sm-12">











                <div class="panel panel-default">
 

  <div  class="panel-heading">

  <span id="dato"><strong>
Infraestructura:</strong> Unefa  <strong>Aula:</strong>  15 <strong> Seccion:</strong>D02 <strong> Asignatura</strong>

Fisica 
</span >





<div class="btn-group pull-right">
<a  class="btn btn-danger  btn-xs " href=""><i class="fa fa-refresh" aria-hidden="true"></i> Reiniciar      </a>
<a  class="btn btn-success btn-xs " href=""><i class="fa fa-check-circle" aria-hidden="true"></i> Guardar       </a>


</div>









   </div>


















                    <div class="panel-body ">
              





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

         <td  class=" warning hora"  > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  07:00 - 07:45</small>   </td>
            <td><i class="fa fa-check-square-o text-success" aria-hidden="true"></i></td>
            <td>Libre</td>
            <td ><div ondrop="drop(event)" id="caja2"   ondragover="allowdrop(event)"   class="box">Libre</div></td>
            <td class="box">....</td>
            <td>....</td>
            <td>....</td>

         
        </tr>
        <tr>

         <td  class=" warning hora"   >  <small><i class="fa fa-clock-o" aria-hidden="true"></i> 07:45 - 08:30</small> </td>
            <td>....</td>
            <td>....</td>
            <td>.....</td>
            <td>.....</td>
            <td>....</td>
            <td>....</td>

     
      </tr>



   <tr>

         <td   class=" warning hora"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i> 08:30 - 09:15</small>  </td>
            <td>....</td>
            <td>....</td>
            <td>.....</td>
            <td>.....</td>
            <td>....</td>
            <td>....</td>

     
      </tr>


         <tr>

         <td   class=" warning hora"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   09:15 - 10:00 </small></td>
            <td>....</td>
            <td>....</td>
            <td>.....</td>
            <td>.....</td>
            <td>....</td>
            <td>....</td>
 
     
      </tr>









        <tr>

         <td   class=" warning hora"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>  10:00 - 10:45  </small></td>
            <td  class="td">Maximo romero</td>
            <td class="td">Maximo romero</td>
            <td class="td">Maximo romero</td>
            <td class="td">Maximo romero</td>
            <td class="td">Maximo romero</td>
            <td class="td">Maximo romero</td>
           
           
        </tr>

   <tr>

         <td   class=" warning hora"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   10:45 - 11:30 </small>  </td>
            <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
        
        </tr>   <tr>

         <td  class=" warning hora"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   11:30 - 12:15  </small> </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr>   <tr>

         <td  class=" warning hora"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>    12:15 - 01:00 </small> </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
      
           
        </tr>   <tr>

         <td  class=" warning hora"  ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   01:00 - 01:45  </small></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
      
           
        </tr>   <tr>

         <td   class=" warning hora"   ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   01:45 - 02:30 </small></td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>
       
           
        </tr>   <tr>

         <td   class=" warning hora"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  02:30 - 03:15  </small> </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr>


 <tr>

         <td   class=" warning hora"   > <small><i class="fa fa-clock-o" aria-hidden="true"></i>  03:15 - 04:00 </small>   </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td    class=" warning hora" ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   04:00 - 04:45 </small>  </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td   class=" warning hora" ><small> <i class="fa fa-clock-o" aria-hidden="true"></i>  04:45- 05:30 </small>  </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td    class=" warning hora" > <small><i class="fa fa-clock-o" aria-hidden="true"></i>    05:30 - 06:15 </small>  </td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td   class=" warning hora" ><small><i class="fa fa-clock-o" aria-hidden="true"></i>   06:15 - 07:45  </small></td>
            <td>...</td>
            <td>....</td>
            <td>....</td>
            <td>....</td>
            <td>...</td>
            <td>...</td>

           
        </tr> <tr>

         <td   class=" warning hora" > <small><i class="fa fa-clock-o" aria-hidden="true"></i>   07:45 - 08:30   </small></td>
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






















  <!-- Plugin JavaScript -->
   <script src="{{ asset('js/jquery.js   ') }}   " ></script>
    <script src="  {{ asset('js/jquery.easing.min.js   ') }}  " ></script>


  <script src="  {{ asset('js/script.js  ') }}     " ></script> 
     <script src="   {{ asset('js/alertify.js    ') }}   " ></script>
  <script src="    {{ asset('js/bootstrap.min.js      ') }}  "></script>
     <script src="      {{ asset('js/pace.min.js          ') }}  " ></script>
        

 

  


</html> 
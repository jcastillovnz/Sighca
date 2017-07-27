

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<link   aria-hidden="true" href="img/favicon.png"  rel="shortcut icon" >



    <title>{{ config('economik', 'Economik tu tienda en linea') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/alertify.min.css">



</head>


<body>
<style type="text/css">

#economik-login{


    font-size: 33px;

}


body {
  padding-top: 9%;
  padding-bottom: 40px;
  background-color: #fff;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}



</style>






    <div class="container">









      <form class="form-signin"       role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


 <did  id="economik-login"   > 
<center  >
<strong   >
  
   <h5><i class="fa fa-university" aria-hidden="true"></i>
Sighca <i class="fa fa-clock-o" aria-hidden="true"></i>  </h5> 

</strong>
</center>
          </did >   


<div class=" form-group">
</div>









       <div  class=" form-group{{ $errors->has('email') ? ' has-error' : '' }}">


   <div   class="input-group">


        
        <input type="email" id="email" name="email"  class="form-control  imput-sm" placeholder="Ingresa tu correo" required autofocus>


 <span class="input-group-addon"><span class=" fa fa-envelope"></span>
                                </span>



        </div>
 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

</div> 
     





 


 <div class=" form-group{{ $errors->has('password') ? ' has-error' : '' }}">

      <div   class="input-group">
                    
                           
                            <input     type="password" title="Contraseña" class="form-control imput-sm "  name="password" id="password" placeholder="Contraseña" required />

  <span class="input-group-addon"><span class="fa fa-barcode" aria-hidden="true"></span>
                                </span>

           

                          </div> 





    










                           
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>



                                @endif











        <div class="checkbox">
          <label>
           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar mas tarde
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>





<div align="center"      class="form-group "  >
                           
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿No recuerdas tu contraseña?
                                </a>
</div>


<div align="center"      class="form-group "  >
                           
                              <a class="btn  btn-block" href="{{ route('register') }}">
                                    Crear una nueva cuenta
                                </a>
</div>



      </form>

    </div> <!-- /container -->












<!--  





<div class="container  tarjeta-login">
  

    <div class="col-xs-4"></div>
 



    <div  class="col-xs-4    ">

 <form class="form-horizontal " role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}









    <div  class=" form-group{{ $errors->has('email') ? ' has-error' : '' }}">



<div class="form-group  ">
<center>
<strong style="font-size: 20px; "  >
      <i id="carrito" class="fa fa-shopping-cart" aria-hidden="true"></i>  <span id="E"> E</span><span id="co">co</span><span id="no">no</span><span id="mi">mi</span><span id="k">k </span>   
</strong></center>
      </div>  






                         <div class="input-group">
                                <span class="input-group-addon"><span class=" fa fa-user-circle"></span>
                                </span>
                            <input    type="text" class="form-control"  name="email" id="email"  placeholder="Correo" required />




                        </div> 

     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

</div> 





                
  <div class=" form-group{{ $errors->has('password') ? ' has-error' : '' }}">

      <div   class="input-group">
                                <span class="input-group-addon"><span class=" fa fa-lock"></span>
                                </span>
                           
                            <input     type="password" title="Contraseña" class="form-control input-sm"  name="password" id="password" placeholder="Contraseña" required />
                        </div>   </div> 

 










  <div class="form-group "  >
                           
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

       
          
         
          <center>
          <button type="submit" name="go" class="btn  btn-primary btn-sm">Entrar al sistema</button>
        </center>
         
          




    
 <div align="center"      class="form-group "  >
                           
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿No recuerdas tu contraseña?
                                </a>
</div>


<div align="center"      class="form-group "  >
                          
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar mas tarde
                                    </label>
                                </div>
                            </div>

        </form>
        




      
    
      
  
      


   <div class="col-xs-4"></div>
  
  
  </div>


    </div>










-->






















  <!-- Plugin JavaScript -->
   <script src="js/jquery.js  " ></script>
    <script src="js/jquery.easing.min.js " ></script>


  <script src="js/script.js " ></script> 
     <script src="js/alertify.js  " ></script>
  <script src="js/bootstrap.min.js"></script>
     <script src="js/pace.min.js  " ></script>
        

 

  


</html> 
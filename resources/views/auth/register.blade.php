@extends('layouts.app')

@section('content')
<section id="registro" >

<did class="container  "    > 





</did>



    <div class="">
      <div    class="container "    >


        <div   class=" row ">
     
  
 <div class="col-sm-4 ">
 </div>



                  <div   class="col-sm-4  ">






 <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                         <div class="form-group  col-sm-12  ">


<center>
 <h1>
  Crea una nueva cuenta</label></h1></center>

</div> 

                          
           <div    class="col-sm-12    form-group{{ $errors->has('name') ? ' has-error' : '' }}">
 

      <div class="input-group">
                                <span class="input-group-addon"><span class=" fa fa-user"></span>
                                </span>
                          
                            <input type="text"  size="10" class="form-control input-sm " id="name"   name="name"  placeholder="Nombre" required />








 </div> 
 @if ($errors->has('name'))
                                   
                                <center>       <strong>{{ $errors->first('name') }}</strong>
                               
                              
</center> 

                                @endif

                        </div> 

<div class="col-sm-12    form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                           
 <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user"></span>
                                </span>


                            <input type="text" class="form-control input-sm"  name="apellido" id="apellido" placeholder="Apellido" required />


  


                        </div>   

 @if ($errors->has('apellido'))
                                
                                     <center>  <strong>{{ $errors->first('apellido') }}</strong>
                                   </center> 
                                @endif



                        </div> 



<div class="col-sm-12     form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                         <div class="input-group">
                                <span class="input-group-addon"><span class=" glyphicon glyphicon-phone-alt"></span>
                                </span>
                            <input type="tel" class="form-control input-sm"  name="telefono" id="telefono" placeholder="Telefono" required />



   



                            </div>

@if ($errors->has('telefono'))
                                 <center>
                                        <strong>{{ $errors->first('telefono') }}</strong>
                               </center>
                                @endif






                        </div> 
                     <div class="col-sm-12   form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <div class="input-group">
                                <span class="input-group-addon"><span class=" fa fa-envelope"></span>
                                </span>
                            <input type="text" class="form-control"  name="email" id="email"  placeholder="Correo" required />






                        </div> 
@if ($errors->has('email'))
                                   
                              <center>       <strong>{{ $errors->first('email') }}</strong>
                                </center>   
                                @endif
</div> 





  <div class="col-sm-12    form-group{{ $errors->has('password') ? ' has-error' : '' }}">

      <div class="input-group">
                                <span class="input-group-addon"><span class=" fa fa-lock"></span>
                                </span>
                           
                            <input type="password" title="Contraseña" class="form-control input-sm"  name="password" id="password" placeholder="Contraseña" required />
                        </div> 


@if ($errors->has('password'))
                                
                                 <center>      <strong>{{ $errors->first('password') }}</strong>
                             </center> 
                                @endif



                          </div> 












                       <div class="col-sm-12    form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                              <div class="input-group">
                                <span class="input-group-addon"><span class=" fa fa-lock"></span>
                                </span>
                           
                            <input type="password" title="Confirmar contraseña"  class="form-control input-sm"  name="password_confirmation" id="password-confirm"  placeholder="Confirmar " required />








     </div> 
                    

@if ($errors->has('password'))
                                    
                                        <strong>{{ $errors->first('password') }}</strong>
                               
                                @endif




                        </div> 



                         
 <div align="center"      class="form-group col-sm-12"  >
                           
                            <button type="submit"    class="btn btn-success "> <i class="fa fa-user" aria-hidden="true"></i>  Registrarme</button>


</div></form>
                    
                        </div> 


        </div>


       

  <div class="col-sm-4 ">
 </div>


      </div>

 
 </div>















</section>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  {{HTML::style('css/materialize.min.css')}}
  {{HTML::style('css/color.css')}}
  {{HTML::style('https://fonts.googleapis.com/icon?family=Material+Icons')}}
</head>
<body>
<br>
  <div class="container">
    <div class="row">
       
       <div class="col s12">
          <div class="caja">
            <img class="circle responsive-img" src="img/login2.png" alt="">
            </div>
        </div>      
<div class="col s12">
            <div class="row">
              {{ Form::open(['url' => 'login', 'autocomplete' => 'on', 'class' => 'col s12', 'role' => 'form']) }} 
                        
                        @if(Session::has('error_message'))
                <div class="alert text-alert">
                   
                    {{ Session::get('error_message') }}
                </div>
               @endif
               
                    <div class="row">
                        <div class="input-field col s12">
                            
                            

                            {{ Form::input('email', 'email', null, array('class'=>'validate', ' id' => 'email')) }}
                            <label for="email">Usuario</label>

                           
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">

                            {{ Form::input('password', 'password', null, array('class'=>'validate', ' id' => 'pass')) }}
                            <label for="pass">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p> 
                               
                               {{ Form::input('checkbox', 'remember', null, array('class'=>'', ' id' => 'remember')) }}
                               
                                <label for="remember">Recordarme</label>
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12">
                            <p class="center-align">
                                {{ Form::submit('Ingresar', ['class' => 'btn']) }} 
   

                                 {{ Form::close() }}
                                
                            </p>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>



{{HTML::script('js/jquery-2.1.4.min.js')}}
{{HTML::script('js/materialize.min.js')}} 
  
</body>
</html>















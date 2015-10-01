<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Resarvas unibague</title>
  
  {{HTML::style('css/materialize.min.css')}}
  {{HTML::style('css/color.css')}}
  {{HTML::style('https://fonts.googleapis.com/icon?family=Material+Icons')}}
  
  
</head>
<body class="body">
     <h5 class="center-align">{{Auth::user()->name_user}}</h5>

  <ul class="collection">

  @foreach($reservas as $reserva)

             @if($reserva->id_usuario == Auth::user()->id)
       
                 
         <li class="collection-item avatar">
      <i class="material-icons circle">&#xE14F;</i>
      <span class="title">Equipo: {{ $reserva->rs_equipo}}</span>
      <p>Cantidad: {{$reserva->rs_cantidad}}<br>
         Fecha: {{$reserva->created_at}}
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons"></i></a>
         </li>
        
         
           @endif 

           

             <!--  
           <h1  class = "text-center text-danger" href="">No tienes reservas</h1> -->

          @endforeach

    
    
  </ul>
              


















  
  {{HTML::script('js/jquery-2.1.4.min.js')}}
  {{HTML::script('js/materialize.min.js')}}
 
</body>
</html>
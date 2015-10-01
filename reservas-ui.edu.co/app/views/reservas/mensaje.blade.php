<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   {{HTML::style('css/materialize.min.css')}}
  {{HTML::style('http://www.getmdl.io/templates/dashboard/material.min.css')}}
  {{HTML::style('https://fonts.googleapis.com/icon?family=Material+Icons')}}
</head>
<body>

<div class="card-panel teal lighten-2">
  
<h1>Hola, {{$tx_usuario}}</h1>
 
<h2>Has realizado la siguiente reserva:</h2>
<h3>Equipo:  {{$tx_equipo}}</h3>
<h3>Cantidad:  {{$reserva_cantidad}}</h3>
<h3>Fecha: {{$tx_fecha}} </h3>

<h2>Recuerda revisar el reglamento de Ayudas Educativas</h2>


</div>

  
  
</body>
</html>





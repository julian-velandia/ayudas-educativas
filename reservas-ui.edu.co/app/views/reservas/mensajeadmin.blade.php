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
  
<h1>Se a realizado una reserva</h1>
 
<h2>Contenido de la reserva:</h2>
<h3>usuario:  {{$tx_usuario}}</h3>
<h3>Numero Documento: {{$tx_documento}}</h3>
<h3>Email: {{$tx_email}}</h3>
<h3>Equipo: {{$tx_equipo}}</h3>
<h3>Cantidad: {{$reserva_cantidad}}</h3>
<h3>Para el dia : {{$tx_fecha}}  hora  {{$tx_hora}}</h3><span></span> 
<h3>Lugar del servicio: {{$tx_lugar}}</h3>
<h3>Tiempo de uso: {{$horas_uso}}  hora</h3>




</div>

  
  
</body>
</html>


<!DOCTYPE html>
<html>
	<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Ayudas Educativas</title>
		<!--Incluimos el CSS de boostrap y el CSS de la plantilla
		que usamos con los helpers de Laravel-->
		{{HTML::style('css/bootstrap.min.css')}}
	
	</head>
	<body>



		<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				
				<li>{{HTML::link('/admin', 'Inicio')}}</li>
				
			</ul>
			<h3 class="text-muted">Reservas</h3>
		</div>
		
		

		<table class="table">
    <thead>
        <tr>
           
            <th>Usuario</th>
            <th>Numero documento</th>
            <th>Email</th>
            <th>Equipo</th>
            <th>Cantidad</th>
            <th>Para el dia y hora</th>
            <th>Lugar del servicio</th>
            <th>Tiempo de uso</th>
        </tr>
    </thead>



@foreach($reservas as $reserva)

           
       
                 
         
      
   

      
        
          <tbody>
        <tr class="info">
            <td >{{$reserva->rs_usuario}}</td>
            <td>{{$reserva->rs_documento}}</td>
            <td>{{$reserva->rs_email}}</td>
            <td>{{ $reserva->rs_equipo}}</td>
            <td>{{$reserva->rs_cantidad}}</td>
            <td>{{$reserva->rs_fecha}} {{$reserva->rs_hora}}</td>
            <td>{{$reserva->rs_lugar}}</td>
            <td>{{$reserva->rs_cantidad_horas}}</td>
            
        </tr>

       
        
    </tbody>
        

           

             <!--  
           <h1  class = "text-center text-danger" href="">No tienes reservas</h1> -->

          @endforeach

     <tr class="warning">
            <td >Juan Jose Ramirez</td>
            <td>111045667</td>
            <td>2120132022@estudiantesunibague.edu.co</td>
            <td>Grabadores MP3</td>
            <td>1</td>
            <td>29 Septiembre, 2015 15:00</td>
            <td>Salon 14</td>
            <td>2 horas</td>
            
        </tr>

         <tr class="success">
            <td >Carlos Armando castro</td>
            <td>111035565</td>
            <td>carlos.armando@unibague.edu.co</td>
            <td>DVD</td>
            <td>1</td>
            <td>29 Septiembre, 2015 15:00</td>
            <td>Salon 102</td>
            <td>1 hora</td>
            
        </tr>

         <tr class="danger">
            <td >Jaime Alvarez</td>
            <td>111035565</td>
            <td>2120132022@estudiantesunibague.edu.co</td>
            <td>Reproductor</td>
            <td>1</td>
            <td>29 Septiembre, 2015 15:00</td>
            <td>Salon 102</td>
            <td>1 hora</td>
            
        </tr>
</table>

		

		
	</div>

	
	
	<!-- Incluimos la libreria jQuery -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Incluimos el JS de boostrap con el Helper de Laravel -->
	
	{{HTML::script('js/jquery.js')}}
	
	{{HTML::script('js/bootstrap.min.js')}}
	</body>
</html>
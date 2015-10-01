<!DOCTYPE html>
<html>
	<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Ayudas Educativas</title>
		<!--Incluimos el CSS de boostrap y el CSS de la plantilla
		que usamos con los helpers de Laravel-->
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::style('css/jumbotron-narrow.css')}}
		{{HTML::style('css/animate.css')}}
		{{HTML::style('css/style.css')}}
		{{HTML::style('color/default.css')}}
	</head>
	<body>

<!--		
	
	<div class="container-fluid">

      

		<header>
			
             		

        	

 <br>
			
			<p class="text-primary">Ayudas Educativas</p> 
			</div>
             
             <div class="collapse navbar-collapse" id="navbar-1">
             	
             	<ul class="nav navbar-nav ">
				<li class="active">{{HTML::link('/','Inicio')}}</li>
				<li class="active">{{HTML::link('vendedor', 'Vendedores')}}</li>
				<li class="active">{{HTML::link('equipo', 'Equipos')}}</li>


</ul>
             </div>

			</div>

			</nav>
		</header>

		-->

		<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				
				<li>{{HTML::link('admin.reservas_admin', 'Reservas')}}</li>
				
			</ul>
			<h3 class="text-muted">Equipos</h3>
		</div>
		
		@yield('contenido')
<!--	Aqui se incluiran los codigos de las vistas que
		use cada metodo de los controladores -->
		

		
	</div>

	
	
	<!-- Incluimos la libreria jQuery -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Incluimos el JS de boostrap con el Helper de Laravel -->
	{{HTML::script('js/files.js')}}
	{{HTML::script('js/jquery.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/wow.min.js')}}
	{{HTML::script('js/jquery.easing.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	</body>
</html>
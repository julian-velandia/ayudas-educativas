<!DOCTYPE html>
<html>
	<head>



 <meta name="description" content="A multipurpose alert, confirm plugin, alternative to the native alert() and confirm() functions. Supports features like auto-close, themes, animations, and more.">		

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Ayudas Educativas</title>
		<!--Incluimos el CSS de boostrap y el CSS de la plantilla
		que usamos con los helpers de Laravel-->
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::style('css/jumbotron-narrow.css')}}
		{{HTML::style('css/animate.css')}}
		{{HTML::style('css/style.css')}}
		{{HTML::style('color/default.css')}}
		{{HTML::style('css/sweetalert.css')}}
	</head>
	<body>
<!--
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse 
      </div>
    </nav>
-->
    <br><br><br>

<!--

		<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li>{{HTML::link('/','X')}}</li>

				-->
				
				
			</ul>
			
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
	{{HTML::script('js/sweetalert.min.js')}}
	</body>
</html>
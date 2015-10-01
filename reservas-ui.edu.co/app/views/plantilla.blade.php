<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Ayudas Educativas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

</head>

<body   id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
 

  

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">
                    <h1>APP reservas</h1> 
                </a>
            </div>

            
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
    <li class="active"><a href="#intro">Home</a></li>
    <li><a href="#nosotros">Nosotros</a></li>
    <li><a href="">{{Auth::user()->name_user}}</a></li>
    <li><a href="/reservas">Mis reservas</a></li>
    <li><a href="{{ action('AuthController@logOut') }}">Cerrar sesión</a></li>
            </div>
            
        </div>

        
        
    </nav>

   
   

  <!-- Section: intro -->
    <section id="intro" class="intro">
  
    <div class="slogan">
      <h2>APP<span class="text_color"></span> </h2>
      <h4>Desde esta App podras realizar reservas de las salas y equipos de ayudas educativas </h4>



<button onclick = "location='/logout'">Cerrar sesión</button>

<button onclick = "location='{{ action('AuthController@logOut') }}'">Cerrar sesión2</button>
      
    </div>
    <div class="page-scroll">
      <a href="#equipos" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
    </section>
  <!-- /Section: intro -->

  <a href="{{ action('AuthController@logOut') }}">Cerrar sesión</a>

  @yield('contenido')
    <!-- Aqui se incluiran los codigos de las vistas que
    use cada metodo de los controladores -->
  

  

  <!-- Section: contact -->
   
  <!-- /Section: contact -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
          <div class="page-scroll marginbot-30">
            <a href="#intro" id="totop" class="btn btn-circle">
              <i class="fa fa-angle-double-up animated"></i>
            </a>
          </div>
          </div>
          <p>&copy;Copyright 2015 Unibague.</p>
        </div>
      </div>  
    </div>
  </footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>

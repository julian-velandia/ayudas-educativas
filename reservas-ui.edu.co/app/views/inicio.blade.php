<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Resarvas unibague</title>
  <link rel="stylesheet" href="css/materialize.min.css" type="text/css"  media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
 
    <link rel="stylesheet" href="css/color.css">

    {{HTML::style('https://fonts.googleapis.com/icon?family=Material+Icons')}}

 
  
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/materialize.min.js"></script>
   

   <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 20px;
      z-index: 900;
    }
    </style>

</head>
<body>
    
    <div class ="container">


   <br>



    <div class="row">
      <label for="search"><i class="material-icons">search</i></label>
  <div class="col s12">
         
 <form> 
  <input  size="15" id="search" type="search" required>


     </form>     

        </div>

   
  </div>
  

 @if( Session::has('modal_message_exitoso'))
    <script type="text/javascript">
        $(document).ready(function() {
             $('#modal1').openModal();
        });
    </script>


   <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5>Mensaje</h5>
      <p>{{ Session::get('modal_message_exitoso') }}</p>
    </div>
    <div class="modal-footer">
      <a href="/" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
          
    
   

@endif


  <!--   
    <div class ="row">

      
          <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
 
              <img src="imagenes/koala.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
               <!-- 
            </div>
            <div class="col s10">
              <span class="black-text">
               Equipos mini portátiles Compaq CQ10-521LA, con Procesador Intel Atom de 1,6 Ghz, Memoria ram de 2 Gb. Disco duro de 160 Gb, Pantalla LCD de 10,1", 3 puertos USB 1.0, Lector tarjetas SD. Salida VGA, Bateria Ion - Li 6 celdas
              </span>

              <p class="black-text">
                Disponibles: 6
            </p>
            </div>
          </div>
        </div>
      </div>
-->





    <div class ="col s12">

      <div class="row">


         @foreach($equipos as $equipo)

          <div class="col s12 ">
            
            <div class="card long">
              <div class="card-image">
                <img  src='{{ asset("imagenes/$equipo->imagen") }}'>
                <span class="card-title">{{$equipo->nombre}}</span>
              </div>
              <div class="card-content">
                <p>{{$equipo->descripcion}}</p>
                 <h6>Disponibles</h6><p class="green-text text-darken-2">{{$equipo->cantidad}}</p>
              </div>
              <div class="card-action">

                <div class="tex_color">
                {{ HTML::link( 'reservas/'.$equipo->id , "Reservar" ) }} 

                </div>
                
              </div>
            </div>
          </div>

          @endforeach  

         
          
        </div>

        


    </div>


    <!-- Colored FAB button with ripple -->

   
<a href="/logout" id="view-source" class="btn-floating btn-large waves-effect" >
<i class="material-icons">&#xE8AC;</i>
 


</a>

 




  

    </div>
    
     
    </div>



   



   
   @if( Session::has('modal_message_exitoso'))
   <script type="text/javascript">
      $(document).ready(function() {
         $('#modal1').openModal();
      });
   </script>
@endif

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Resarvas unibague</title>
  
  {{HTML::style('css/materialize.min.css')}}
  {{HTML::style('css/color.css')}}
  
  {{HTML::style('https://fonts.googleapis.com/icon?family=Material+Icons')}}

 {{HTML::style('css/datepicker.min.css')}}
  
       

</head>
<body>
  

<div class="container">

  <div class="row">



     <!-- Expandable Textfield 

    <div class="col s12">
      
             <div class="card">
            <div class="card-image">
              <img src="img/koala.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>


    </div>

    -->
<div class="col s12">
    {{Form::open(array('url' => 'reservas', 'files' => true, 'name'=> 'form1'))}} 

    @if (Session::get('messaje'))
               <div class="alert alert-success">{{Session::get('messaje')}}</div>
               @endif

     
      

        <h5 class="center-align">Información de tu reserva</h5>


<label for="first_name">Equipo</label>

       
<div class="row">
  <div class="col s12">
         
  {{ Form::text('tx_equipo', $equipos->nombre, array('class'=>'', 'placeholder'=>'nombre', ' id' => 'first_name', 'readonly' => 'readonly')) }}
        

        </div>

   
  </div>

   <label for="cantidad">Cantidad</label>  

      <div class="row">

        <div class="col s12">

        
 {{Form::select('reserva_cantidad', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10' ),'1');}}  

    

    
  
    

        </div>
      </div>



        </div>

      
      </div>

      

<!--
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col s4"> 
         
     

{{ Form::input('number', 'reserva_cantidad', 1, array('class'=>'mdl-textfield__input', 'pattern'=>'-?[1-9]*(\.[1-9]+)?', ' id' => 'cantidad')) }}

     
    <span class="mdl-textfield__error">Debes ingresar una cantidad válida!</span> 

   
  </div>  

  --> 
    

    

    {{ Form::hidden('tx_usuario',  Auth::user()->name_user, array('class'=>'form-control', 'placeholder'=>'', 'id' => '')) }}

    {{ Form::hidden('tx_id',  Auth::user()->id, array('class'=>'form-control', 'placeholder'=>'', 'readonly' => '')) }}
    
   {{ Form::hidden('tx_email',  Auth::user()->email, array('class'=>'', 'placeholder'=>'', 'id' => '')) }}

    {{ Form::hidden('tx_documento', Auth::user()->documento , array('class'=>'', 'placeholder'=>'', 'id' => 'email')) }}


      
       <h6 class="center-align">Elije la hora y fecha en la cual necesitaras el equipo.(Campos obligatorios)</h6>

   <label for="fecha">Fecha</label>
   <div class="row">
  <div class="col s12">
    
     {{ Form::input('date', 'tx_fecha', null, array('class'=>'datepicker', 'placeholder'=>'Seleccione la fecha', ' id' => '')) }}

 

  </div> 

</div>
 <label for="fecha">Hora</label>
 <div class="row">
  <div class="col s12">
    
     {{ Form::input('time', 'tx_hora', null, array('class'=>'nput-field', 'placeholder'=>'Seleccione la hora', ' id' => '')) }}

 <label for="fecha">Tiempo de uso (Horas exactas)</label>
  
    <div class="row">

        <div class="col s12">

    

   
{{ Form::input('number', 'horas_uso', 1, array('class'=>'', 'placeholder'=>'', ' id' => '')) }}   
        
  
    

        </div>
      </div>
 <label for="fecha">Lugar del servicio (Especifique el lugar)</label>

   <div class="row">

        <div class="col s12">

  

     {{ Form::text('tx_lugar',  null, array('class'=>'', 'placeholder'=>'Lugar de servicio', 'id' => 'lugar')) }}     

    
  
    

        </div>
      </div>    

  

  </div> 

</div>


   
 <div class="row">

        <div class="col 12">

         

</div>
      </div>
  
<!--
       
      <div class="row">


        <div class="input-field col s12">

          {{ Form::textarea('tx_observaciones', null, array('class'=>'materialize-textarea',  'placeholder'=>'Este campo es necesario solo si el equipo debe ser trasladado a alguna dependencia', 'id'=>'textarea1'))}}
           <label for="textarea1">Observaciones</label>

        </div>


      </div> 

-->

{{ Form::submit('Confirmar', array('class'=>'btn btn2', 'onclick'=>'javascript:enviarforms()')) }}

 

 

   
  </div>  




   
     
  </div>

  {{ Form::close() }}
































  </div>
  






























<br>
</div>
















  
  {{HTML::script('js/jquery-2.1.1.min.js')}}
  {{HTML::script('js/materialize.min.js')}}
  
  


  <script>
  $(document).ready(function() {
    $('select').material_select();
    $('.datepicker').pickadate();
    
  });

</script>
</body>
</html>
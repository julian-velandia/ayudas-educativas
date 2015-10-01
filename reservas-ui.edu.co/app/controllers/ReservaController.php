<?php
class ReservaController extends BaseController {


 
    public function usuarioReserva(){

          if (Auth::check())
        {
            // Si tenemos sesión activa mostrará las reservas del usuario
        $reservas = Reserva::all();
        return View::make('reservas.mis_reservas', array('reservas' => $reservas));
            
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('no_reservas');

       
      
        }

 public function reservasAdmin(){

         
        $reservas = Reserva::all();
        return View::make('admin.reservas_admin', array('reservas' => $reservas));
            
        
      
     

       
      
        }



 
    public function crearReserva2(){
 
        $respuesta = Reserva::agregarReserva(Input::all());
        
        if ($respuesta['error'] == true){
            return Redirect::to('/')->withErrors($respuesta['aler_mensaje'] )->withInput();
        }else{
            return Redirect::to('/')->with('aler_mensaje', $respuesta['aler_mensaje']);
        }
    }


    public function editarEquipo(){



     $id = Input::get("id_equipo");

          $equipos = Equipo::find($id);

          $cantidad_total = Input::get("total_cantidad");
         $cantidad = Input::get("reserva_cantidad");
        


        $cantidad_update = $cantidad_total - $cantidad;

        $equipos->cantidad =  $cantidad_update;

        $equipos->save();

        return Redirect::to('/')->withInput();



        


    }




/*

  public function crearReserva(){
 

 //Validar los input
    $reglas =  array(

            'email'  => 'required',  
           
        );

$validator = Validator::make(Input::all(), $reglas);     
    
    if ($validator->passes()) {
     $reservas = new Reserva();
    $reservas->rs_equipo= Input::get("tx_equipo");
    $reservas->id_usuario = Input::get("tx_id");
         $reservas->rs_usuario = Input::get("tx_usuario");
         $reservas->rs_cantidad = Input::get("reserva_cantidad");
         $reservas->rs_observaciones = Input::get("tx_observaciones");
    $reservas->save();
 
    Mail::send('reservas.mensaje', array('tx_usuario'=>Input::get('tx_usuario')), function($message){
            
        $message->to(Input::get('email'))->subject('Haz realizado una reserva');


 
 });
 
   return Redirect::to('/');
   
} else {
    
}
         
        
        

    

       

         
         

     
     

        

         

        

         
         
}

}

*/





    public function crearReserva(){
            
         $reservas = new Reserva();  

         $reservas->rs_equipo= Input::get("tx_equipo");
         $reservas->id_usuario = Input::get("tx_id");
         $reservas->rs_usuario = Input::get("tx_usuario");
         $reservas->rs_documento = Input::get("tx_documento");
         $reservas->rs_cantidad = Input::get("reserva_cantidad");
         $reservas->rs_email = Input::get("tx_email");
         $reservas->rs_fecha = Input::get("tx_fecha");
         $reservas->rs_hora = Input::get("tx_hora");
         $reservas->rs_lugar = Input::get("tx_lugar");
         $reservas->rs_cantidad_horas = Input::get("horas_uso");

         $reservas->save();

if ($reservas->save()) {

     Mail::send('reservas.mensaje', array('tx_equipo'=>Input::get('tx_equipo'),  'reserva_cantidad'=>Input::get('reserva_cantidad') ,'tx_usuario'=>Input::get('tx_usuario'), 'tx_fecha'=>Input::get('tx_fecha')), function($message){
        $message->to(Input::get('tx_email'))->subject('Haz realizado una reserva'); });

    Mail::send('reservas.mensajeadmin', array('tx_equipo'=>Input::get('tx_equipo'), 'reserva_cantidad'=>Input::get('reserva_cantidad') ,'tx_usuario'=>Input::get('tx_usuario'), 'tx_email'=>Input::get('tx_email')  , 'tx_documento'=>Input::get('tx_documento'), 'tx_fecha'=>Input::get('tx_fecha'),'tx_hora'=>Input::get('tx_hora'),'tx_lugar'=>Input::get('tx_lugar') ,'horas_uso'=>Input::get('horas_uso')), function($message){
    $message->to('nacionaljulian12@gmail.com')->subject('Se ha realizado una reserva'); });

      return Redirect::to('/')
          ->with("modal_message_exitoso", "Se ha reservador con exito.");
   
} else {
     return Redirect::to('reservas/{id}')->with('message', 'Error al reservar');
}

       


}
      
         
     
         
     
     

        

         

        

         
         
}



?>
<?php
class Reserva extends Eloquent  {
 
    protected $table = 'reserva';

     protected $fillable  = array('rs_equipo', 'rs_cantidad', 'usuario_id');
    
 
    public static function agregarReserva($input){
        
        $respuesta = array();
 
        $reglas =  array(
            
             
            'tx_cantidad' => array('required', 'numeric'), 
        );
        
        $validator = Validator::make($input, $reglas);
        
        if ($validator->fails()){
            $respuesta['aler_mensaje'] = $validator;
            $respuesta['error']   = true;
        }else{
            
            $reserva = static::create($input);
                               
            $respuesta['aler_mensaje'] = 'Reserva creada!';
            $respuesta['error']   = false;
            $respuesta['data']    = $reserva;
        }
        
        return $respuesta; 
    }
}
?>
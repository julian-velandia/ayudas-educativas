<?php
class Equipo extends Eloquent  {

	protected $table = 'equipo';
   

   protected $fillable  = array('nombre', 'descripcion', 'cantidad');
     


   //public static function agregarEquipo($input){





   //}   

      
    public static function agregarEquipo($input){

     //   $file = Input::file('imagen');

      //  $destinoPath = public_path().'/imagenes/';

      //  $url_imagen = $file->getClientOriginalName();

      //  $subir = $file ->move($destinoPath,$file->getClientOriginalName());

       

       //  $file = Input::file('imagen');
        
        $respuesta = array();
 
        

        $reglas =  array(

            'nombre'  => array('required', 'max:100'),  
           // 'imagen' => array('required'), 
            'descripcion'  => array('required', 'max:1000'),  
            'cantidad' => array('required', 'numeric'), 
        );
        
        $validator = Validator::make($input, $reglas);
        
        if ($validator->fails()){
            $respuesta['mensaje'] = $validator;
            $respuesta['error']   = true;
        }else{

             
             
            
             $equipo = static::create($input);
                               
            $respuesta['mensaje'] = 'Equipo registrado!';
            $respuesta['error']   = false;
            $respuesta['data']    = $equipo;
        }
        
        return $respuesta; 
    }


}

?>
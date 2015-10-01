<?php
class EquipoController extends BaseController {
 
    public function mostrarTodo(){
  
        $equipos = Equipo::all();
       
        // buscamos todos los equipos y los pasamos a la vista de inicio
        return View::make('inicio', array('equipos' => $equipos));

        
    }


    public function mostrarEquipos(){
 
        $equipos = Equipo::all();

      
       
       
        // buscamos todos los productos y los pasamos a la vista de productos
        return View::make('equipo.lista', array('equipos' => $equipos));
    }

    public function mostrarEquipos2(){
 
        $equipos = Equipo::all();
       
        // buscamos todos los productos y los pasamos a la vista de productos
        return View::make('admin.lista2', array('equipos' => $equipos));
    }


     public function verEquipo($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id del equipo que se desea buscar y se debe declarar en la ruta como un parámetro

        $equipos = Equipo::find($id);

        // para buscar ek equipo utilizamos el metido find que nos proporciona Laravel
        // este método devuelve un objete con toda la información que contiene un equipo

    
          return View::make('reservas.ver', array('equipos' => $equipos));

    
          
    

        

   
    }





/* 
    
*/
public function subirFoto(){

//Validar los input
    $reglas =  array(

            'nombre'  => 'required',  
           // 'imagen' => array('required'), 
            'descripcion'  => 'required',  
            'cantidad' => 'required|numeric', 
            'imagen' => 'required|image',
        );

$validator = Validator::make(Input::all(), $reglas);
        
        if ($validator->fails()){

           // return Redirect::back()->with_input()->with_errors($validator);

              return Redirect::to('admin')
                // Aquí se esta devolviendo a la vista los errores
                ->withErrors($validator)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
            
        }
  

   


      

   
        
        $file = Input::file('imagen');

       // $file = Input::file('imagen')->getMimeType();


        $destinoPath = public_path().'/imagenes/';

        $url_imagen = $file->getClientOriginalName();

        $subir = $file ->move($destinoPath,$file->getClientOriginalName());
         



        if ($subir) {
         
         $equipos = new Equipo();

         $equipos->nombre= Input::get("nombre");
         $equipos->imagen = $file->getClientOriginalName();
         $equipos->descripcion = Input::get("descripcion");
         $equipos->cantidad = Input::get("cantidad");



         $equipos->save();

        // return Redirect::to('admin')->withInput();

        return Redirect::to('admin')->with('mensaje', 'Equipo Creado!');
         

        }

}


public function eliminarEquipo(){

     

        $id = Input::get("id");

        $equipos = Equipo::find($id);



        $equipos->delete();

         return Redirect::to('admin');
    
}


}
?>
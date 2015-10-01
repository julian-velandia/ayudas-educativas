<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::resource('admin', 'EquipoController');

/*

Route::get('mis_reservas', function()
{   


 $users = User::with('reservas')->get();

 return View::make('mis_reservas', array('users'=> $users));
    
});


/*
Rutas del administrador
*/



Route::get('admin', 'EquipoController@subirFoto');
Route::get('admin', 'EquipoController@mostrarEquipos2');

Route::get('admin.reservas_admin', 'ReservaController@reservasAdmin');


//Route::get('admin', 'EquipoController@mostrarEquipos2');

Route::delete('admin', 'EquipoController@eliminarEquipo');

Route::post('equipo', 'EquipoController@subirFoto');



 
/*
Rutas del usuario para iniciar sesión
*/



Route::get('reglamento', function()
{
     return View::make('reglamento');
});


Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('/login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']); //Procesa el formulario e identifica al usuario
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión
//Desconecta al usuario
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']); //Desconecta al usuario




/*Rutas privadas solo para usuarios autenticados*/


Route::group(['before' => 'auth'], function()
{
Route::get('/', 'EquipoController@mostrarTodo');
Route::get('reservas/{id}', array('uses'=>'EquipoController@verEquipo'));



});






/*
Rutas para gestionar equipos
*/

/*
Route::post('equipo', 'EquipoController@subirFoto');


/*
Rutas para gestionar reservas
*/




Route::get('reservas', 'ReservaController@usuarioReserva'); // muestra la reserva del usuario
Route::post('reservas', 'ReservaController@crearReserva'); // Crear la reserva
Route::put('reservas', 'ReservaController@editarEquipo');




 




Route::group(['before' => 'administrador'], function()
{
  //  Route::get('admin', 'EquipoController@subirFoto');
  //  Route::get('admin', 'EquipoController@mostrarEquipos2');
    


});


 







?>
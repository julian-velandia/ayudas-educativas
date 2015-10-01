<?php
class UsersController extends BaseController {









public function reservas(){
        // creamos una relación con el modelo de Producto
        return $this->hasMany('Reserva');
    }




















}

?>



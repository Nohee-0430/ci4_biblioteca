<?php

namespace App\Controllers;
/*usar el modelo, el modelo es una clase que se conecta con la tabla*/
use App\Models\EstadosModel;
class EstadosController extends BaseController
{
    public function mostrarDatos()
    {
        //crear un objeto de tipo EstadosModel
        $estado = new EstadosModel();
        //buscar datos y cargarlos en un elemento de php
        $datos['datos']=$estado->findAll(); /*findAll() = select * from estados */
        //enviar los datos a una vista
        return view('estados',$datos);
    } 
}
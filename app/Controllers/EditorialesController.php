<?php
namespace App\Controllers;
use App\Models\EmpleadosModel;
class EmpleadosController extends BaseController
{
    public function mostrarDatos()
    {
        $empleados = new EmpleadosModel();
        $datos['datos']=$empleados->findAll();
        return view('empleados',$datos);
    } 
}
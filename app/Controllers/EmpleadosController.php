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

    public function guardar()
    {
        $empleados = new EmpleadosModel();
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $direccion = $this->request->getVar('txt_direccion');
        $email = $this->request->getVar('txt_correo');

        $datos=[
            'codigo_empleado'=>$codigo,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'direccion'=>$direccion,
            'email'=>$email
        ];
        $empleados->insert($datos);
        return $this->mostrarDatos();
    }
}
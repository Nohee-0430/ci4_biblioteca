<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    public function index()
    {
        $empleado = new EmpleadosModel();
        $datos["datos"] = $empleado->findAll();
        return view("empleados", $datos);
    }

    public function buscarId($codigo)
    {
        $empleado = new EmpleadosModel();
        $datos["datos"] = $empleado->where('codigo_empleado', $codigo)->first();
        return view("empleados_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'nombre'    => $this->request->getVar('txt_nombre'),
            'apellido'  => $this->request->getVar('txt_apellido'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'email'     => $this->request->getVar('txt_email')
        ];

        $empleado = new EmpleadosModel();
        $empleado->update($codigo, $datos);
        
        return redirect()->to(base_url('empleados'));
    }

    public function insertar()
    {
        $datos = [
            'codigo_empleado' => $this->request->getVar('txt_codigo'),
            'nombre'          => $this->request->getVar('txt_nombre'),
            'apellido'        => $this->request->getVar('txt_apellido'),
            'direccion'       => $this->request->getVar('txt_direccion'),
            'email'           => $this->request->getVar('txt_email')
        ];

        $empleado = new EmpleadosModel();
        $empleado->insert($datos);
        
        return redirect()->to(base_url('empleados'));
    }

    public function eliminar($codigo)
    {
        $empleado = new EmpleadosModel();
        $empleado->delete($codigo);

        return redirect()->to(base_url('empleados'));
    }
}

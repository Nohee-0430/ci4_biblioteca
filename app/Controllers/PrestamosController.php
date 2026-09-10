<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PrestamosModel;

class PrestamosController extends BaseController
{
    public function index()
    {
        $prestamo = new PrestamosModel();
        $datos["datos"] = $prestamo->findAll();
        return view("prestamos", $datos);
    }

    public function buscarId($codigo)
    {
        $prestamo = new PrestamosModel();
        $datos["datos"] = $prestamo->where('numero_prestamo', $codigo)->first();
        return view("prestamos_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'codigo_libro'     => $this->request->getVar('txt_codigo_libro'),
            'carne_alumno'     => $this->request->getVar('txt_carne_alumno'),
            'fecha_prestamo'   => $this->request->getVar('txt_fecha_prestamo'),
            'fecha_devolucion' => $this->request->getVar('txt_fecha_devolucion'),
            'codigo_empleado'  => $this->request->getVar('txt_codigo_empleado')
        ];

        $prestamo = new PrestamosModel();
        $prestamo->update($codigo, $datos);
        
        return redirect()->to(base_url('prestamos'));
    }

    public function insertar()
    {
        $datos = [
            'numero_prestamo'  => $this->request->getVar('txt_codigo'),
            'codigo_libro'     => $this->request->getVar('txt_codigo_libro'),
            'carne_alumno'     => $this->request->getVar('txt_carne_alumno'),
            'fecha_prestamo'   => $this->request->getVar('txt_fecha_prestamo'),
            'fecha_devolucion' => $this->request->getVar('txt_fecha_devolucion'),
            'codigo_empleado'  => $this->request->getVar('txt_codigo_empleado')
        ];

        $prestamo = new PrestamosModel();
        $prestamo->insert($datos);
        
        return redirect()->to(base_url('prestamos'));
    }

    public function eliminar($codigo)
    {
        $prestamo = new PrestamosModel();
        $prestamo->delete($codigo);

        return redirect()->to(base_url('prestamos'));
    }
}

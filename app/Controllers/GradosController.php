<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradosModel;

class GradosController extends BaseController
{
    public function index()
    {
        $grado = new GradosModel();
        $datos["datos"] = $grado->findAll();
        return view("grados", $datos);
    }

    public function buscarId($codigo)
    {
        $grado = new GradosModel();
        $datos["datos"] = $grado->where('codigo_grado', $codigo)->first();
        return view("grados_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'nombre' => $this->request->getVar('txt_nombre')
        ];

        $grado = new GradosModel();
        $grado->update($codigo, $datos);
        
        return redirect()->to(base_url('grados'));
    }

    public function insertar()
    {
        $datos = [
            'codigo_grado' => $this->request->getVar('txt_codigo'),
            'nombre'       => $this->request->getVar('txt_nombre')
        ];

        $grado = new GradosModel();
        $grado->insert($datos);
        
        return redirect()->to(base_url('grados'));
    }

    public function eliminar($codigo)
    {
        $grado = new GradosModel();
        $grado->delete($codigo);

        return redirect()->to(base_url('grados'));
    }
}

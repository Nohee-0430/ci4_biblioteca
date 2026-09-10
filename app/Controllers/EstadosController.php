<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstadosModel;

class EstadosController extends BaseController
{
    public function index()
    {
        $estado = new EstadosModel();
        $datos["datos"] = $estado->findAll();
        return view("estados", $datos);
    }

    public function buscarId($codigo)
    {
        $estado = new EstadosModel();
        $datos["datos"] = $estado->where('codigo_estado', $codigo)->first();
        return view("estados_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'nombre' => $this->request->getVar('txt_nombre')
        ];

        $estado = new EstadosModel();
        $estado->update($codigo, $datos);
        
        return redirect()->to(base_url('estados'));
    }

    public function insertar()
    {
        $datos = [
            'codigo_estado' => $this->request->getVar('txt_codigo'),
            'nombre'        => $this->request->getVar('txt_nombre')
        ];

        $estado = new EstadosModel();
        $estado->insert($datos);
        
        return redirect()->to(base_url('estados'));
    }

    public function eliminar($codigo)
    {
        $estado = new EstadosModel();
        $estado->delete($codigo);

        return redirect()->to(base_url('estados'));
    }
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function index()
    {
        $autor = new AutoresModel();
        $datos["datos"] = $autor->findAll();
        return view("autores", $datos);
    }

    public function buscarId($codigo)
    {
        $autor = new AutoresModel();
        $datos["datos"] = $autor->where('codigo_autor', $codigo)->first();
        return view("autores_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'apellido'     => $this->request->getVar('txt_apellido'),
            'nombre'       => $this->request->getVar('txt_nombre'),
            'nacionalidad' => $this->request->getVar('txt_nacionalidad')
        ];

        $autor = new AutoresModel();
        $autor->update($codigo, $datos);
        
        return redirect()->to(base_url('autores'));
    }

    public function insertar()
    {
        $datos = [
            'codigo_autor' => $this->request->getVar('txt_codigo'),
            'apellido'     => $this->request->getVar('txt_apellido'),
            'nombre'       => $this->request->getVar('txt_nombre'),
            'nacionalidad' => $this->request->getVar('txt_nacionalidad')
        ];

        $autor = new AutoresModel();
        $autor->insert($datos);
        
        return redirect()->to(base_url('autores'));
    }

    public function eliminar($codigo)
    {
        $autor = new AutoresModel();
        $autor->delete($codigo);

        return redirect()->to(base_url('autores'));
    }
}

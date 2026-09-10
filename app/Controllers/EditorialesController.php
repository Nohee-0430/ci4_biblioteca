<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EditorialesModel;

class EditorialesController extends BaseController
{
    public function index()
    {
        $editorial = new EditorialesModel();
        $datos["datos"] = $editorial->findAll();
        return view("editoriales", $datos);
    }

    public function buscarId($codigo)
    {
        $editorial = new EditorialesModel();
        $datos["datos"] = $editorial->where('codigo_editorial', $codigo)->first();
        return view("editoriales_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'nombre'    => $this->request->getVar('txt_nombre'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'telefono'  => $this->request->getVar('txt_telefono'),
            'email'     => $this->request->getVar('txt_email')
        ];

        $editorial = new EditorialesModel();
        $editorial->update($codigo, $datos);
        
        return redirect()->to(base_url('editoriales'));
    }

    public function insertar()
    {
        $datos = [
            'codigo_editorial' => $this->request->getVar('txt_codigo'),
            'nombre'           => $this->request->getVar('txt_nombre'),
            'direccion'        => $this->request->getVar('txt_direccion'),
            'telefono'         => $this->request->getVar('txt_telefono'),
            'email'            => $this->request->getVar('txt_email')
        ];

        $editorial = new EditorialesModel();
        $editorial->insert($datos);
        
        return redirect()->to(base_url('editoriales'));
    }

    public function eliminar($codigo)
    {
        $editorial = new EditorialesModel();
        $editorial->delete($codigo);

        return redirect()->to(base_url('editoriales'));
    }
}

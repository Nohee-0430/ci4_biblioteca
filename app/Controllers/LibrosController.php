<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index()
    {
        $libro = new LibrosModel();
        $datos["datos"] = $libro->findAll();
        return view("libros", $datos);
    }

    public function buscarId($codigo)
    {
        $libro = new LibrosModel();
        $datos["datos"] = $libro->where('codigo_libro', $codigo)->first();
        return view("libros_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'codigo_autor'     => $this->request->getVar('txt_codigo_autor'),
            'codigo_editorial' => $this->request->getVar('txt_codigo_editorial'),
            'titulo'           => $this->request->getVar('txt_titulo'),
            'numero_paginas'   => $this->request->getVar('txt_numero_paginas'),
            'tamanio'          => $this->request->getVar('txt_tamanio'),
            'precio'           => $this->request->getVar('txt_precio'),
            'estado'           => $this->request->getVar('txt_estado'),
            'edicion'          => $this->request->getVar('txt_edicion')
        ];

        $libro = new LibrosModel();
        $libro->update($codigo, $datos);
        
        return redirect()->to(base_url('libros'));
    }

    public function insertar()
    {
        $datos = [
            'codigo_libro'     => $this->request->getVar('txt_codigo'),
            'codigo_autor'     => $this->request->getVar('txt_codigo_autor'),
            'codigo_editorial' => $this->request->getVar('txt_codigo_editorial'),
            'titulo'           => $this->request->getVar('txt_titulo'),
            'numero_paginas'   => $this->request->getVar('txt_numero_paginas'),
            'tamanio'          => $this->request->getVar('txt_tamanio'),
            'precio'           => $this->request->getVar('txt_precio'),
            'estado'           => $this->request->getVar('txt_estado'),
            'edicion'          => $this->request->getVar('txt_edicion')
        ];

        $libro = new LibrosModel();
        $libro->insert($datos);
        
        return redirect()->to(base_url('libros'));
    }

    public function eliminar($codigo)
    {
        $libro = new LibrosModel();
        $libro->delete($codigo);

        return redirect()->to(base_url('libros'));
    }
}

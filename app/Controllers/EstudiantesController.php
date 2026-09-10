<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstudiantesModel;

class EstudiantesController extends BaseController
{
    public function index()
    {
        $estudiante = new EstudiantesModel();
        $datos["datos"] = $estudiante->findAll();
        return view("estudiantes", $datos);
    }

    public function buscarId($codigo)
    {
        $estudiante = new EstudiantesModel();
        $datos["datos"] = $estudiante->where('carne_alumno', $codigo)->first();
        return view("estudiantes_editar", $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');
        
        $datos = [
            'nombre'          => $this->request->getVar('txt_nombre'),
            'apellido'        => $this->request->getVar('txt_apellido'),
            'direccion'       => $this->request->getVar('txt_direccion'),
            'telefono'        => $this->request->getVar('txt_telefono'),
            'email'           => $this->request->getVar('txt_email'),
            'fechanacimiento' => $this->request->getVar('txt_fechaNac'),
            'codigo_grado'    => $this->request->getVar('txt_codigo_grado')
        ];

        $estudiante = new EstudiantesModel();
        $estudiante->update($codigo, $datos);
        
        return redirect()->to(base_url('estudiantes'));
    }

    public function insertar()
    {
        $datos = [
            'carne_alumno'    => $this->request->getVar('txt_codigo'),
            'nombre'          => $this->request->getVar('txt_nombre'),
            'apellido'        => $this->request->getVar('txt_apellido'),
            'direccion'       => $this->request->getVar('txt_direccion'),
            'telefono'        => $this->request->getVar('txt_telefono'),
            'email'           => $this->request->getVar('txt_email'),
            'fechanacimiento' => $this->request->getVar('txt_fechaNac'),
            'codigo_grado'    => $this->request->getVar('txt_codigo_grado')
        ];

        $estudiante = new EstudiantesModel();
        $estudiante->insert($datos);
        
        return redirect()->to(base_url('estudiantes'));
    }

    public function eliminar($codigo)
    {
        $estudiante = new EstudiantesModel();
        $estudiante->delete($codigo);

        return redirect()->to(base_url('estudiantes'));
    }
}

<?php

namespace App\Controllers;
/*usar el modelo, el modelo es una clase que se conecta con la tabla*/
use App\Models\EstadosModel;
class EstadosController extends BaseController
{
    public function index()
    {
        //crear un objeto del modelo
        $estado = new EstadosModel();
        $datos["datos"]=$estado->findAll();
        return view("estados",$datos);
    }
    public function buscarId($codigo){
        $estado = new EstadosModel();
        $datos["datos"]=$estado->where('codigo_estado',$codigo)->first();
        return view("estados_editar",$datos);
    }
    public function actualizar()
    {
        //recibir los datos del formulario
        $codigo = $this->request->getVar('txt_codigo');
        
        //trasladar los datos a un array
        $datos=[
            'nombre'=>$this->request->getVar('txt_nombre'),
            'apellido'=>$this->request->getVar('txt_apellido'),
            'direccion'=>$this->request->getVar('txt_direccion'),
            'email'=>$this->request->getVar('txt_email')
        ];
        //ejecutar el metodo de update
        $estado = new estadosModel();
        $estado->update($codigo,$datos);
        return $this->index();
    }
    public function insertar()
    {
        //recibir los datos y agregarlos en un array
        $datos=[
            'codigo_estado'=>$this->request->getVar('txt_codigo'),
            'nombre'=>$this->request->getVar('txt_nombre'),
            'apellido'=>$this->request->getVar('txt_apellido'),
            'direccion'=>$this->request->getVar('txt_direccion'),
            'email'=>$this->request->getVar('txt_email')
        ];
        //ejecutar el metodo insert
        $estado = new estadosModel();
        $estado->insert($datos);
        return $this->index();
    }
    public function eliminar($codigo)
    {
        $estado = new estadosModel();
        $estado->delete($codigo);

        //llama al metodo index, carga los datos en la vista estados
        return $this->index();
    }
}
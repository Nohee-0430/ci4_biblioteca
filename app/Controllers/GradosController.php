<?php
namespace App\Controllers;
use App\Models\GradosModel;
class GradosController extends BaseController
{
    public function mostrarDatos()
    {
        $grados = new GradosModel();
        $grados['datos']=$grados->findAll();
        return view('grados',$datos);
    } 
}
<?php
namespace App\Models;
use CodeIgniter\Model;

class EmpleadosModel extends Model 
{
    protected $table = 'editoriales';
    protected $primaryKey = 'codigo_editoriales';
    protected $allowedFields = [
        'codigo_empleado',
        'nombre',
        'apellido',
        'direccion',
        'email'
    ];
}

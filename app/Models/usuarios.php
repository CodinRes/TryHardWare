<?php

namespace App\Models;

use CodeIgniter\Model;

class usuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    
    protected $useAutoIncrement = true;
    
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['id_persona', 'nombre_usuario', 'correo_acceso', 'contrasena_hash', 'rol', 'creado_en', 'activo'];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}

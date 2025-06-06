<?php

namespace App\Models;

use CodeIgniter\Model;

class productosModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    
    protected $useAutoIncrement = true;
    
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['id_categoria', 'nombre', 'descripcion','precio','stock','marca', 'sku', 'url_imagen'];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'careers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
    protected $returnType = 'array';
}
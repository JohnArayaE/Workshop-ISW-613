<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'lastname', 'email', 'career_id'];
    protected $useTimestamps = false;

    // Nuevo método para obtener todos los estudiantes con su carrera
    public function getAllWithCareer()
    {
        return $this->select('students.*, careers.name as career_name')
                    ->join('careers', 'careers.id = students.career_id', 'left')
                    ->findAll();
    }
}

<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\CareerModel;

class Student extends BaseController
{
    // (Opcional) podrías hacer que /students liste, pero de momento no lo usamos
    public function index()
    {
        $studentModel = new StudentModel();
        $data['students'] = $studentModel->findAll();

        // Si quisieras una lista, podrías crear una vista students/list.php
        // De momento puedes dejar esto sin usar o ajustarlo después.
        return view('students/index', $data);
    }

    // Mostrar formulario para crear estudiante
    public function create()
    {
        $careerModel = new CareerModel();
        $data['careers'] = $careerModel->findAll(); // para el combo

        return view('students/create', $data);
    }

    // Guardar estudiante en la BD
    public function store()
    {
        $studentModel = new StudentModel();

        $data = [
            'name'       => $this->request->getPost('name'),
            'lastname'   => $this->request->getPost('lastname'),
            'email'      => $this->request->getPost('email'),
            'career_id'  => $this->request->getPost('career_id'),
        ];

        $studentModel->insert($data);

        // id del estudiante recién insertado
        $id = $studentModel->getInsertID();

        // Redirige a una vista de detalle del estudiante
        return redirect()->to(site_url('students/show'));

    }

    // Mostrar datos de un estudiante + su carrera
    public function show()
{
    $studentModel = new StudentModel();
    $students = $studentModel->getAllWithCareer();

    return view('students/show', ['students' => $students]);
}


    // Más adelante puedes implementar edit/update/delete si lo necesitas
}

<?php

namespace App\Controllers;

use App\Models\CareerModel;

class Career extends BaseController
{
    public function index()
    {
        $model = new CareerModel();
        $data['careers'] = $model->findAll();
        return view('careers/index', $data);
    }

    public function create()
    {
        return view('careers/create');
    }

    public function store()
    {
        $model = new CareerModel();

        $model->save([
            'name' => $this->request->getPost('name')
        ]);

        return redirect()
            ->to(site_url('careers'))
            ->with('success', 'Career created successfully');
    }

    public function edit($id)
    {
        $model = new CareerModel();
        $data['career'] = $model->find($id);
        return view('careers/edit', $data);
    }

    public function update($id)
    {
        $model = new CareerModel();

        $model->update($id, [
            'name' => $this->request->getPost('name')
        ]);

        return redirect()
            ->to(site_url('careers'))
            ->with('success', 'Career updated successfully');
    }

    public function delete($id)
    {
        $model = new CareerModel();
        $model->delete($id);

        return redirect()
            ->to(site_url('careers'))
            ->with('success', 'Career deleted successfully');
    }
}


<?php

namespace App\Controllers;


use App\Models\PatientModel;

class Patient extends BaseController
{
    public function index()
    {
        $model = new PatientModel();
        $data['patient'] = $model->findAll();
        return view('patient_list', $data);
    }

    public function create()
    {
        return view('patient_form');
    }

    public function store()
    {
        $model = new PatientModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone')
        ];
        $model->save($data);
        return redirect()->to('/patient');
    }

    public function edit($id)
    {
        $model = new PatientModel();
        $data['patient'] = $model->find($id);
        return view('patient_edit_form', $data);
    }

    public function update($id, $data)
    {
        $model = new PatientModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone')
        ];
        $this->update($id, $data);
        return redirect()->to('/patient');
    }

    public function delete($id)
    {
        $model = new PatientModel();
        $model->delete($id);
        return redirect()->to('/patient');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClassController extends CI_Controller
{
    public function list()
    {
        // Load Model
        $this->load->model('ClassModel');
        // get list classes
        $classes = $this->ClassModel->getList();
        return $this->load->view('class/list', [
            'classes' => $classes
        ]);
    }

    public function create()
    {
        return $this->load->view('class/create');
    }

    public function edit()
    {
        $this->load->model('ClassModel');
        $id = $this->input->get('id');
        $class = $this->ClassModel->getById($id);
        return $this->load->view('class/edit', [
            'class' => $class,
            'id'=>$id
        ]);
    }

    public function store()
    {
        $this->load->model('ClassModel');


        $name = $this->input->post('name');
        $data = [
            'name' => $name,
        ];
        return $this->ClassModel->insert($data);
    }

    public function update()
    {
        $this->load->model('ClassModel');

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $data = [
            'id'=>$id,
            'name' => $name,
        ];
        return $this->ClassModel->update($data);
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->load->model('ClassModel');  
        return $this->ClassModel->delete($id);

    }
}

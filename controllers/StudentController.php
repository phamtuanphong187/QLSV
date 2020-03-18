<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function list()
    {
        // Load Model
        $this->load->model('StudentModel');
        // get list students
        $students = $this->StudentModel->getList();
        return $this->load->view('student/list', [
            'students' => $students
        ]);
    }

    public function create()
    {
        $this->load->model('ClassModel');
        $classes = $this->ClassModel->getList();
        return $this->load->view('student/create',['classes'=>$classes]);
    }

    public function edit()
    {
        $this->load->model('StudentModel');
        $id = $this->input->get('id');
        $student = $this->StudentModel->getById($id);
        return $this->load->view('student/edit', [
            'student' => $student,
            'id' => $id
        ]);
    }

    public function store()
    {
        $this->load->model('StudentModel');


        $name = $this->input->post('name');
        $year_birth = $this->input->post('year_birth');
        $class_id = $this->input->post('class_id');
        $data = [
            'name' => $name,
            'year_birth' => $year_birth,
            'class_id' => $class_id,
        ];
        return $this->StudentModel->insert($data);
    }

    public function update()
    {
        $this->load->model('StudentModel');

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $year_birth = $this->input->post('year_birth');
        $class_id = $this->input->post('class_id');
        $data = [
            'id' => $id,
            'name' => $name,
            'year_birth' => $year_birth,
            'class_id' => $class_id,
        ];
        return $this->StudentModel->update($data);
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->load->model('StudentModel');
        return $this->StudentModel->delete($id);
    }
}

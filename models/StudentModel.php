<?php
class StudentModel extends CI_Model
{
    public function __construct()
    {

    }
    public function getList()
    {
        $query = $this->db->query("SELECT * FROM students;");
        return $query->result_array();
    }
    public function insert($data)
    {
        return $insert=$this->db->insert("students",$data);
    }
    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM students WHERE id = $id");
        return $query->row();
    }
    public function update($data)
    {
        return $this->db->update('students', $data, array('id' => $data['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('students', array('id' => $id));
    }

}

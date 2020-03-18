<?php
class ClassModel extends CI_Model
{
    public function __construct()
    {

    }
    public function getList()
    {
        $query = $this->db->query("SELECT * FROM classes;");
        return $query->result_array();
    }
    public function insert($data)
    {
        return $insert=$this->db->insert("classes",$data);
    }
    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM classes WHERE id = $id");
        return $query->row();
    }
    public function update($data)
    {
        return $this->db->update('classes', $data, array('id' => $data['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('classes', array('id' => $id));
    }

}

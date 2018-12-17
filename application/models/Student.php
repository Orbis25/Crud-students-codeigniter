<?php

class Student extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function add($data)
    {
        $model = [
            'name' => $data['name'], 'lasname' => $data['lastName'],
            'email' => $data['email'], 'datetime' => $data['dateTime'], 'dni' => $data['dni']
        ];
        $this->db->insert('students', $model);
    }

    public function countAll(){
       return $this->db->count_all('students');
    }

    public function getAll(){
       $query = $this->db->get('students');
       return $query->result();
    }

    public function getById($id){
        $this->db->where('id',$id);
        $result = $this->db->get('students');
        return $result->result();
    }

    public function update($data){
        $model = [
            'name' => $data['name'], 'lasname' => $data['lastName'],
            'email' => $data['email'], 'datetime' => $data['dateTime'], 'dni' => $data['dni']
        ];
        $this->db->set($model);
        $this->db->where('id', $data['id']);
        $this->db->update('students', $model);
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('students');
    }
}
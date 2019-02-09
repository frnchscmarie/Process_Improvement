<?php

class Training_model extends CI_Model {
    private $table = 'training';
    
    function createtraining($trainingRecord){
        $this->db->insert($this->table, $trainingRecord);
    }
    
    function read($id){
        $this->db->select('*');
        $this->db->from('training');
        $this->db->where('employeeID', $id);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
          }
    
    function update_training($title,$newRecord){
        $this->db->where('title', $title);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->num_rows();
    }

    function readtraining(){
        $this->db->select('*');
        $this->db->from($this->table);

        $query = $this->db->get();

        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false; 
    }
}
?>
<?php

class OT_model extends CI_Model {
    private $table = 'ot';
    
    function createot($otRecord){
        $this->db->insert($this->table, $otRecord);
    }
    
    function read($condition=null){
    
        $this->db->select('*');
        $this->db->from('ot');
        
        if(isset($condition))
            $this->db->where('employeeID', $condition);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
          }
    
    function update($newRecord){
        $this->db->replace($this->table,$newRecord);
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

    function readall($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('employeeID',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }
}
?>
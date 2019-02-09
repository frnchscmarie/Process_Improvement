<?php

class MR_model extends CI_Model {
    private $table = 'mr';
    private $property = 'property';
    
    function createproperties($mrRecord){
        $this->db->insert($this->property, $mrRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->property);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
          }
    
    function update($newRecord){
        $this->db->replace($this->table,$newRecord);
    }

    function createproperty($newRecord){
        $this->db->insert($this->table, $newRecord);
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

    function readmr(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
}
?>
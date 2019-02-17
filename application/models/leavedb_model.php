<?php

class Leavedb_model extends CI_Model {
    private $table = 'leavedb';
    private $holiday = 'calendar';
    
    function createleave($leaveRecord){
        
        $this->db->insert($this->table, $leaveRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        
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
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->num_rows();
    }

    function readholiday($id){
        $this->db->select('*');
        $this->db->from($this->holiday);
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function createholiday($holiday){
        $this->db->insert($this->holiday, $holiday);
    }

     function update_holiday($id,$newRecord){
        $this->db->where('id', $id);
        $this->db->update($this->holiday,$newRecord);
    }
    function readallholidays(){
        $this->db->select('*');
        $this->db->from($this->holiday);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function delHoliday($where_array){
        $this->db->delete($this->holiday,$where_array);
    }

    function leaveread($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }
}
?>
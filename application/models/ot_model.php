<?php

class OT_model extends CI_Model {
    private $table = 'ot';
    private $ot = 'emp_ot';
    
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

    function fetchnotif(){
        $this->db->select('*')
        ->join('employee', 'ot.employeeID = employee.employeeID');
        $this->db->where('status', 'Pending');
        $query = $this->db->get('pending'); 
        return $query->result_array();
    }

    public function getemployee($id){
        $this->db->select('*');
        $this->db->where('employeeID', $id);
        $query = $this->db->get('employee');
        if($query->num_rows() > 0 )
        {
            return $query->result_array();
        }
    }
    function getOT($id){
        $this->db->select('*');
        $this->db->from($this->ot);
        $this->db->where('employeeID',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;        
    }
    function updateot($get, $month, $allotted){
        $this->db->set($month,$allotted);
        $this->db->where('employeeID', $get);
        $this->db->update('emp_ot');        
    }
}
?>
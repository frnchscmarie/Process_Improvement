<?php

class MR_model extends CI_Model {
    private $table = 'mr';
    private $property = 'property';
    private $table2 = 'pullout';
    
    function createproperties($mrRecord){
        $this->db->insert($this->property, $mrRecord);
    }
    
    function read1($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->property);
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function emptyProp(){
        $this->db->select('*');
        $this->db->from($this->property);
        $where = "property_no NOT IN
        (SELECT property_no FROM mr)";
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function unassignedProp(){
        $this->db->select('*');
        $this->db->from($this->table);
        $where = "property_no NOT IN
        (SELECT property_no FROM mr)";
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function update_mr($property_no, $newRecord){
        $this->db->where('property_no', $property_no);
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

    function readmr($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('employeeID', $id);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    function deleteMr($id){
        $this->db->where('property_no', $id);
        $this->db->delete('mr'); 
    }

    function getmr($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('property_no', $id);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }


    function backupmr($data){
        $this->db->insert($this->table2, $data);    
    }    

    function readmrall(){
        $this->db->select('*');
        $this->db->from($this->table);
        $where = 'employeeID is NOT NULL AND status = "requested" OR status ="returned" OR status = "pending"';
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    function updatemr($status){
        $this->db->set('status','requested');
        $this->db->where('property_no', $status);
        $this->db->update('mr');
        $this->db->where('property_no', $status);
        $this->db->delete('mr_notification');  
    }
    
    function updatedismr($status){
        $this->db->set('status','returned');
        $this->db->where('property_no', $status);
        $this->db->update('mr');
    }

    function createmr($data){
        $this->db->insert($this->table, $data);
    }

    function unassigned(){
        $this->db->select('*');
        $this->db->from($this->table);
        $where = "employeeID is NULL";
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    function getunass($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('property_no', $id);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    function assignMR($id, $data){
        $this->db->where('property_no', $id);
        $this->db->update('mr', $data);
    }
    function updateMRtoPending($id){
        $query = $this->db->query("UPDATE mr SET status = 'pending' WHERE property_no = '$id'");
        return true;
    }

    function approvemr($id){
        $this->db->set('status','approved');
        $this->db->where('property_no', $id);
        $this->db->update('mr');
    }

    function readapprove(){
        $this->db->select('*');
        $this->db->from($this->table);
        $where = 'employeeID is NOT NULL AND status = "approved"';
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    function getmemo($id){
        $this->db->set('status','returned');
        $this->db->where('property_no', $id);
        $this->db->update('mr');
    }

    function getallprop(){
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

    function getallprop2(){
        $this->db->select('*');
        $this->db->from($this->property);
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
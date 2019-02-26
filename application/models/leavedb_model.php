<?php

class Leavedb_model extends CI_Model {
    private $table = 'leavedb';
    private $holiday = 'calendar';
    private $credits = 'credits';
    private $employee = 'employee';
    
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

    function countholidays(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->num_rows();
    }

    function readleave($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('employeeID',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
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

    function getdata($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }
    function getOT($id){
        $query = $this->db->query("SELECT * FROM ot JOIN employee WHERE ot.employeeID = employee.employeeID AND ot.id = '$id'");
        return $query->result_array();
    } 
    function getLeave($id){
        $query = $this->db->query("SELECT * FROM leavedb JOIN employee WHERE leavedb.employeeID = employee.employeeID AND leavedb.id = '$id' AND status ='pending'");
        return $query->result_array();
    } 
    function getMr($id){
        $query = $this->db->query("SELECT * FROM mr JOIN employee WHERE mr.employeeID = employee.employeeID AND mr.property_no = '$id'");
        return $query->result_array();
    } 
    function getallOT($id=null){
        if(isset($id)){            
            $query = $this->db->query("SELECT * FROM ot JOIN employee WHERE ot.employeeID = employee.employeeID AND ot.id NOT IN ('$id')");
        } else{
            $query = $this->db->query("SELECT * FROM ot JOIN employee WHERE ot.employeeID = employee.employeeID");
        }
        return $query->result_array();
    } 
    function getallLeave($id = null){
        if(isset($id)){            
            $query = $this->db->query("SELECT * FROM leavedb JOIN employee WHERE leavedb.employeeID = employee.employeeID AND leavedb.status = 'pending' AND leavedb.id NOT IN ('$id')");
        } else{
            $query = $this->db->query("SELECT * FROM leavedb JOIN employee WHERE leavedb.employeeID = employee.employeeID AND leavedb.status = 'pending' ");
        }
        return $query->result_array();
    } 
    function getallMr(){
        $query = $this->db->query("SELECT * FROM mr JOIN employee WHERE mr.employeeID = employee.employeeID");
        return $query->result_array();
    } 
    function approveleave($id){
        $this->db->set('status','approved');
        $this->db->where('id', $id);
        $this->db->update('leavedb');

        $this->db->where('id', $id);
        $this->db->delete('leaved_notification');
    }
    function diapproveleave($id){
        $this->db->set('status','disapproved');
        $this->db->where('id', $id);
        $this->db->update('leavedb');
        
        $this->db->where('id', $id);
        $this->db->delete('leaved_notification');
    }
    function approveot($id){
        $this->db->set('status','approved');
        $this->db->where('id', $id);
        $this->db->update('ot');

        $this->db->where('id', $id);
        $this->db->delete('ot_notification');
    }
    function diapproveot($id,$remarks){
        $this->db->set('status','disapproved');
        $this->db->set('remarks',$remarks);
        $this->db->where('id', $id);
        $this->db->update('ot');
        
        $this->db->where('id', $id);
        $this->db->delete('ot_notification');
    }

    function check($id){
        $this->db->select('*');
        $this->db->from($this->credits);
        $this->db->where('employeeID',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function getcredits($id){
        $this->db->select('*');
        $this->db->from($this->credits);
        $this->db->where('employeeID',$id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function updatevacation($vacation, $id){
        $this->db->set('vacation', $vacation);
        $this->db->where('employeeID', $id);
        $this->db->update('credits');        
    }

    function updatesick($sick, $id){
        $this->db->set('sick', $sick);
        $this->db->where('employeeID', $id);
        $this->db->update('credits');        
    }  
    
    function updateslp($slp, $id){
        $this->db->set('slp', $slp);
        $this->db->where('employeeID', $id);
        $this->db->update('credits');        
    }

    function updateother($other, $id){
        $this->db->set('others', $other);
        $this->db->where('employeeID', $id);
        $this->db->update('credits');        
    }  

    function getHoliday(){
        $this->db->select('*');
        $this->db->from($this->holiday);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }
/*    function getallLeavesuper($id){
        if(isset($id)){            
            $query = $this->db->query("SELECT * FROM leavedb JOIN employee WHERE leavedb.employeeID = employee.employeeID AND leavedb.status = 'pending' AND leavedb.id NOT IN ('$id')");
        } else{
            $query = $this->db->query("SELECT * FROM leavedb JOIN employee WHERE leavedb.employeeID = employee.employeeID AND leavedb.status = 'pending' ");
        }
        return $query->result_array();
    } */
    function getallLeavesuper($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $where = "supervisorID = '$id' AND status = 'approved'";
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

    function getemp($id){
        $this->db->select('*');
        $this->db->from($this->employee);
        $this->db->where('employeeID', $id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;   
    }
}
?>
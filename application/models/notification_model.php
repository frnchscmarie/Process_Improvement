<?php

class Notification_model extends CI_Model {
	function read_ot_notification(){
        // $this->db->select('*');
        // $this->db->from('ot_notification');        
        // $query = $this->db->get();
        // if($query->num_rows()>0)
        //     return $query->result_array();
        // else
        //     return false;
        $query = $this->db->query("SELECT * FROM ot_notification JOIN employee WHERE ot_notification.employeeID = employee.employeeID");
        return $query->result_array();
    }
    function read_leave_notification(){        
        $query = $this->db->query("SELECT * FROM leaved_notification JOIN employee WHERE leaved_notification.employeeID = employee.employeeID");
        return $query->result_array();
    }
    function read_mr_notification(){        
        $query = $this->db->query("SELECT * FROM mr_notification JOIN employee WHERE mr_notification.employeeID = employee.employeeID");
        return $query->result_array();
    }
    function get_type($username){
        $query = $this->db->query("SELECT * FROM login WHERE username = '$username'");
        return $query->result_array();
    }
    function get_id_admin($username){
        $query = $this->db->query("SELECT * FROM login WHERE username = '$username'");
        return $query->result_array();   
    }
    function get_all_for_admin($username){
//         $query = $this->db->query("SELECT * FROM login JOIN leavedb WHERE login.id = leavedb.employeeID AND login.type NOT IN ('    
// Supervisor','Department Head')");
        $query = $this->db->query("SELECT * FROM login JOIN leaved_notification JOIN employee WHERE login.id = leaved_notification.employeeID AND login.type NOT IN ('    
Supervisor','Department Head')");
        return $query->result_array();   
    }
}
?>
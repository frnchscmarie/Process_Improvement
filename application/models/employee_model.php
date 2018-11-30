<?php

class Employee_model extends CI_Model {
    private $table = 'employee';
    
    function createemployee($employeeRecord){

        $this->db->insert($this->table, $employeeRecord);
        $data = array( 
        'id'=>$employeeRecord['employeeID'],
        'username' => $employeeRecord['employee_name'] , 
        'password' => '12345'
        );
        $this-> db->insert('login', $data);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from('login');
        if(isset($condition))
            $this->db->where('username', $condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

      function read_employees($condition=null){
        $this->db->select('*');
        $this->db->from('employee');
        if(isset($condition))
            $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }

      function remployee($id){
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('employeeID', $id);
        $query = $this->db->get();
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
    }


    function update($newRecord){

        $this->db->replace($this->table, $newRecord);
    }
    
    function del($where_array){
        
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    $query = $this->db->query('SELECT * FROM employee');
    return $query->num_rows();

    }

    function users()
    {
        $query = $this->db->get('employee');
        return $query->result();
    }
    function data($employeeID)
    {
        $query = $this->db->get_where('employee', array('employeeID' => $employeeID));
        return $query->result();
    }

    function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('login');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }

}
?>
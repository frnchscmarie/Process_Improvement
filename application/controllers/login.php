<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    // global $user_access = "";
    // private static $user_access = "";
    public function index()
    {
        $this->form_validation->set_rules('username','Username','required', array('required' => 'Invalid Username or Password.'));
        if($this->form_validation->run()==TRUE)
            $this->form_validation->set_rules('password','Password','callback_verifyLogin');
        if($this->form_validation->run()==FALSE){
            $this->load->view('login_view');
        }
        else {
            
                 redirect(base_url('process_improvement'));
            
        }
    }
    
    public function verifyLogin($password) {
        $username = $this->input->post('username');
        $condition = array('username'=>$user, 'password'=>$pass);
        $this->load->model('employee_model','Employee');
        $result_array = $this->Employee->read();
        
        if($result_array){
            foreach($result_array as $row){
                // $user_access = $row['fname'];
                $sess_array = array(
                    'username'  =>  $row['username']                    
                );

                // $this->session->set_userdata('type', $row['type']);
                // $this->session->set_userdata('username', $row['username']);
                $this->session->set_userdata($sess_array);                                        
            }
            return true;
        }
        else{
            $this->form_validation->set_message('verifyLogin','Invalid Username or Password.');
            return false;
        }
    }
    
    public function logout(){
        session_unset();
        session_destroy();
        redirect(base_url('login'));
    }
  
    public function header_user(){
        // session_start();
        $this->load->model('notification_model','estudyante');
        // $result_array = $this->estudyante->read_ot_notification();
        $result_array = $this->estudyante->get_type($this->session->userdata('username'));
        if($result_array){
            foreach($result_array as $i){
              $info = array(
                'type' => $i['type']                
              );
              $type[]=$info;
            }        
            $types['type'] = $type;
        }
        echo json_encode($types);
    }
}

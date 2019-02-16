<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class notification_controller extends CI_Controller {
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('notification_model','estudyante');
	// }
	// public function ot_notification{
	// 	$this->load->model('notification_model','estudyante');
 //        $result_array = $this->estudyante->read_ot_notification();
        
 //        if($result_array){
 //            foreach($result_array as $row){
 //                $this->session->set_userdata('username', $row['username']);
            
 //            }
 //            return true;
 //        }
 //        else{
 //            $this->form_validation->set_message('verifyLogin','Invalid Username or Password.');
 //            return false;
 //        }
	// }
	    public function ot_notification() {        
        $this->load->model('notification_model','estudyante');
        // $result_array = $this->estudyante->read_ot_notification();
        $result_array = $this->estudyante->read_ot_notification();
        
        if($result_array){
            foreach($result_array as $i){
              $info = array(
                'id' => $i['id'],
                'employee_name' => $i['lname'].", ".$i['fname']." ".$i['mname'],
                'date_of_filing' => $i['date_of_filing']
              );
              $ot[]=$info;
            }        
            $ot_notif['ot_notification'] = $ot;
        }
        echo json_encode($ot_notif);
    }    
}
?>
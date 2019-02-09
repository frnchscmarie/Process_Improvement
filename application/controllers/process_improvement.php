<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_Improvement extends CI_Controller {

  public function __construct(){
        parent::__construct();

    $this->load->library('session');
    $this->load->helper(array('form', 'url'));
    // $this->load->library('form_validation'); 
    $this->load->library(array('form_validation','ciqrcode')); 
    // $this->load->library('ciqrcode');

    $this->load->model('employee_model','employee');
    $this->load->model('leavedb_model','leavedb');
    $this->load->model('mr_model','mr');
    $this->load->model('ot_model','ot');
    $this->load->model('training_model','training');
    $this->load->model('trainingsched_model','trainingsched');
    
    }

    public function index()
    { 

          $data['employee'] = $this->employee->users();
          $this->load->view('login_view', $data);

    }

  public function login_validate(){
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->employee->can_login($username, $password))
        {
          $session_data = array (
              'username' => $username,
              'password' => $password,
              'logged_in' => TRUE
              );
              $this->session->set_userdata($session_data);
              $data['username'] = $this->session->userdata('username');            

              $userinfo = $this->employee->read($data['username']);
              foreach($userinfo as $i){
              $info = array(
                'id' => $i['id'],
                'username' => $i['username'],
                'type'=> $i['type']
              );
              $info;
            }       
            $data['success'] = true;  
            redirect('process_improvement/dashboard', 'refresh');
        }
        else
        {
         echo "<script type='text/javascript'>alert('Wrong Username or Password');
                window.location='index';
                </script>";
        }
    }
    else
    {
       $this->session->set_userdata('username','username');
       $this->index();
    }
  }

    public function logout(){
      $this->load->driver('cache');
      $this->session->sess_destroy();
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('headername');
      $this->session->unset_userdata('logged_in');
      $this->cache->clean();
      ob_clean();
      redirect(base_url(), 'refresh');
  }

   public function changepass(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                   'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;


   $this->form_validation->set_rules('old_pass', 'Old Password', 'trim|required');
   $this->form_validation->set_rules('new_pass', 'New Password', 'trim|required');
   $this->form_validation->set_rules('confrim_pass', 'Confirm Password', 'trim|required|matches[new_pass]');

   if($this->form_validation->run())
        {
        $new_pass = $this->input->post('new_pass');

        if($this->employee->changepass($info['id'], $new_pass)){
        }

        }
    $this->load->view('include/header' ,$usertype);
    $this->load->view('changepass_view'); 
    $this->load->view('include/footer');
}
  public function dashboard(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $data['total'] = $this->training->read($info['id']);
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
       $this->load->view('include/header', $usertype);
       $this->load->view('dashboard', $data);
       $this->load->view('include/footer');
  }


    public function EmployeeProfile()
    {
    $logged_in = $this->session->userdata('logged_in');
    if($logged_in != TRUE || empty($logged_in))
    {

        $this->session->set_flashdata('error', 'Session has Expired');
        redirect('process_improvement/index');
    }else{
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut = array(
                      'type'=>$t['type'],
                      'id'=>$t['id']
          );
          $types[]=$ut;
        }
        $userid = $ut['id'];
        $info = $this->employee->remployee($userid);
        foreach($info as $f){
          $in=array(
            'id'=>$f['employeeID'],
            'fname'=>$f['fname'],
            'lname'=>$f['lname'],
            'mname'=>$f['mname'],
            'pg'=>$f['pg_level'],
            'bday'=>$f['birthday'],
            'dh'=>$f['date_hired'],
            'pos'=>$f['position'],
            'email'=>$f['email'],
            'pd'=>$f['promo_date'],
            'cs'=>$f['civil_stat'],
            'cp'=>$f['cp_no']
          );
          $infoss[]=$in;
        }

        $infos['info'] = $infoss;
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('pick',$infos);
        $this->load->view('include/footer');
    }
  }

  public function display()
    {     

    $employeeID = $this->input->post('employeeID');
    $data = $this->employee->data($employeeID);
    if(count($data)>0)
      {
        $array=$data;
      }
      echo json_encode($data);
    }

    public function viewEmployeeAdmin(){
        $result_array = $this->employee->read_employees();
        $data['employee'] = $result_array; 
        $id =  $this->employee->count();
        $data['employeeID'] = (string) $id++;
        $header_data['title'] = "View Employees";
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                   'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('employee_admin',$data);
        $this->load->view('include/footer');
        
    }
   
    public function addEmployee(){
        //load the view
        //get form data
        //add to db
        $rules = array(
                   array('field'=>'employeeID', 'label'=>'Employee ID', 'rules'=>'required'),
                   array('field'=>'lname', 'label'=>'Last Name', 'rules'=>'required'),
                   array('field'=>'fname', 'label'=>'First Name', 'rules'=>'required'),
                   array('field'=>'username', 'label'=>'Username', 'rules'=>'required'),
                   array('field'=>'type', 'label'=>'type', 'rules'=>'required'),
                   array('field'=>'pg_level', 'label'=>'PG_Level', 'rules'=>'required'),
                   array('field'=>'birthday', 'label'=>'Birthdate', 'rules'=>'required'),
                   array('field'=>'date_hired', 'label'=>'Date Hired', 'rules'=>'required'),
                   array('field'=>'position', 'label'=>'Position', 'rules'=>'required'),
                   array('field'=>'email', 'label'=>'Email', 'rules'=>'required'),
                   array('field'=>'promo_date', 'label'=>'Date of last promotion', 'rules'=>'required'),
                   array('field'=>'civil_stat', 'label'=>'Civil Status', 'rules'=>'required'),
                   array('field'=>'cp_no', 'label'=>'Contact No', 'rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){

        }
       else{
            $employeeRecord=array(
                'employeeID'=>$_POST['employeeID'],
                'lname'=>$_POST['lname'],
                'fname'=>$_POST['fname'],
                'mname'=>$_POST['mname'],
                'username'=>$_POST['username'],
                'type'=>$_POST['type'],
                'password'=> '12345',
                'pg_level'=>$_POST['pg_level'],
                'birthday'=>$_POST['birthday'],
                'date_hired'=>$_POST['date_hired'],
                'position'=>$_POST['position'],
                'email'=>$_POST['email'],
                'promo_date'=>$_POST['promo_date'],
                'civil_stat'=>$_POST['civil_stat'],
                'cp_no'=>$_POST['cp_no']
            );
            $this->employee->createemployee($employeeRecord);
            redirect('process_improvement/viewEmployeeAdmin');
            }
    }

    public function updateEmployee($employeeID){
         $employeeRecord['employeeID']=$employeeID;
         $condition = array('employeeID' => $employeeID);
         $oldRecord = $this->employee->read_employees($condition);
        
        foreach($oldRecord as $o){
                $data['employeeID']=$o['employeeID'];
                $data['lname']=$o['lname'];
                $data['fname']=$o['fname'];
                $data['mname']=$o['mname'];
                $data['pg_level']=$o['pg_level'];
                $data['birthday']=$o['birthday'];
                $data['date_hired']=$o['date_hired'];
                $data['position']=$o['position'];
                $data['email']=$o['email'];
                $data['promo_date']=$o['promo_date'];
                $data['civil_stat']=$o['civil_stat'];
                $data['cp_no']=$o['cp_no'];
              }
            
             $rules = array(
                  
                   array('field'=>'employeeID', 'label'=>'EmployeeID', 'rules'=>'required'),
                  
                );
            
            $this->form_validation->set_rules($rules);
            
            if($this->form_validation->run()==FALSE){
            
                    $data1 = $_SESSION['username'];
                    $type= $this->employee->read($data1);
                    foreach($type as $t){
                      $ut= array(
                                  'type'=>$t['type']
                      );
                      $types[]=$ut;
                    }
                    $usertype['types'] = $types;
                    $this->load->view('include/header',$usertype);
                    $this->load->view('updateEmployeeForm',$data);
                    $this->load->view('include/footer');
             }
            else{
          
                $newRecord=array(
                    'employeeID'=>$employeeID,
                    'lname'=>$_POST['lname'],
                    'fname'=>$_POST['fname'],
                    'mname'=>$_POST['mname'],
                    'pg_level'=>$_POST['pg_level'],
                    'birthday'=>$_POST['birthday'],
                    'date_hired'=>$_POST['date_hired'],
                    'position'=>$_POST['position'],
                    'email'=>$_POST['email'],
                    'promo_date'=>$_POST['promo_date'],
                    'civil_stat'=>$_POST['civil_stat'],
                    'cp_no'=>$_POST['cp_no']
                     );
                    
                    $this->employee->update_employee($employeeID,$newRecord);
                    redirect('process_improvement/viewEmployeeAdmin');
                 }
        }

    public function delEmployee($employeeID){
        $where_array = array('employeeID'=>$employeeID);
        $this->employee->del($where_array);
        redirect('process_improvement/viewEmployeeAdmin');
          }

    public function viewLeave(){
     
        $result_array = $this->leavedb->read();
        $data['leavedb'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('leave_view',$data);
        $this->load->view('include/footer');   
    }

    public function addLeave(){
        
        $rules = array(
                   array('field'=>'date_of_filing', 'label'=>'Date of Filing', 'rules'=>'required'),
                   array('field'=>'place', 'label'=>'Place', 'rules'=>'required'),
                   array('field'=>'type', 'label'=>'Type of Leave', 'rules'=>'required'),
                   array('field'=>'no_of_days', 'label'=>'No. of Days', 'rules'=>'required'),
                   array('field'=>'inc_from', 'label'=>'Inclusive Dates', 'rules'=>'required'),
                   array('field'=>'inc_to', 'label'=>'Inclusive Dates', 'rules'=>'required'),
                   array('field'=>'supervisor', 'label'=>'Approver', 'rules'=>'required'),
                   array('field'=>'status', 'label'=>'Status', 'rules'=>'required'),
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){
            $data1 = $_SESSION['username'];
            $type= $this->employee->read($data1);
            foreach($type as $t){
              $ut= array(
                          'type'=>$t['type']
              );
              $types[]=$ut;
            }
            $usertype['types'] = $types;
            $this->load->view('include/header',$usertype);
            $this->load->view('include/footer');
        }
       else{
          
            $leaveRecord=array(
                'date_of_filing'=>$_POST['date_of_filing'],
                'place'=>$_POST['place'],
                'type'=>$_POST['type'],
                'no_of_days'=>$_POST['no_of_days'],
                'inc_from' =>$_POST['inc_from'],
                'inc_to' =>$_POST['inc_to'],
                'supervisor'=>$_POST['supervisor'], 
                'status'=>$_POST['status'],
                
            );
            $this->leavedb->createleave($leaveRecord);
            redirect('process_improvement/viewLeave');
            }
    }

    

   public function viewMR(){
        $result_array = $this->mr->readmr();
        $data['records'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;


        $this->load->view('include/header',$usertype);
        $this->load->view('mradmin_view',$data);
        $this->load->view('include/footer');
        }


   public function viewProperties(){
       $result_array = $this->mr->read();
        $data['mrRecord'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;

        $this->load->view('include/header',$usertype);
        $this->load->view('property_view',$data);
        $this->load->view('include/footer');
        }

  public function qrcode(){
        $result_array = $this->mr->read();
        $data['mrRecord'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('property_view',$data);
        $this->load->view('include/footer');
      
        
/*        echo '<img src="'.base_url('/assets/qrcode/').'15-082-238.png" />';   */     
    }
    public function addProperties(){
      
        $rules = array(
                   array('field'=>'property_no', 'label'=>'Property Number', 'rules'=>'required'),
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){
            $data1 = $_SESSION['username'];
            $type= $this->employee->read($data1);
            foreach($type as $t){
              $ut= array(
                          'type'=>$t['type']
              );
              $types[]=$ut;
            }
            $usertype['types'] = $types;
            $this->load->view('include/header',$usertype);
            $this->load->view('include/footer');
        }
       else{
          
            $mrRecord=array(
                'property_no'=>$_POST['property_no'],
            );
          
           $get_current_path_to_front = str_replace('\\', '/', realpath(dirname(__FILE__))) . '/'; 
           $set_new_path_to_front = str_replace('\\', '/', realpath($get_current_path_to_front . '../../assets/qrcode')) . '/';
           $load_path = str_replace('\\', '/', realpath($get_current_path_to_front . '../../assets/qrcode/')) . '/';
           $params['data'] = $_POST['property_no']; //enter the data to be converted to qrcode
           $params['size'] = 40;
           $params['savename'] = $set_new_path_to_front.$_POST['property_no'].'.png';
           $config['cacheable']  = true; //boolean, the default is true
           $config['cachedir']   = ''; //string, the default is application/cache/
           $config['errorlog']   = ''; //string, the default is application/logs/
           $config['quality']    = true; //boolean, the default is true
           $config['size']     = ''; //interger, the default is 1024
           $config['black']    = array(224,255,255); // array, default is array(255,255,255)
           $config['white']    = array(70,130,180); // array, default is array(0,0,0)
           $this->ciqrcode->generate($params);    

            $this->mr->createproperties($mrRecord);
            redirect('process_improvement/viewProperties');
            }
    }


    public function updateProperties($property_no){

          $data1 = $_SESSION['username'];
          $type= $this->employee->read($data1);
          foreach($type as $t){
          $ut= array(
         'type'=>$t['type']
          );
          $types[]=$ut;
         }
         $usertype['types'] = $types;      
         $mrRecord['property_no']=$property_no;
         $condition = array('property_no' => $property_no);
         $oldRecord = $this->mr->read($condition);

         foreach($oldRecord as $o){
                $data['property_no']=$o['property_no'];
              }

            $usertype['types'] = $types;
            $this->load->view('include/header',$usertype);
            $this->load->view('updatePropertyForm',$data);
            $this->load->view('include/footer');
    }

    public function viewTrainingAdmin(){
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;

        $result_array = $this->training->readtraining();
        $data['alltraining'] = $result_array;
        $this->load->view('include/header',$usertype);
        $this->load->view('trainingadmin_view', $data);
        $this->load->view('include/footer');
        
    }

    public function viewTraining(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $result_array = $this->training->read($info['id']);
        $data['training'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('training_view',$data);
        $this->load->view('include/footer');
        
    }

    public function addTraining(){
        
        $rules = array(
                   array('field'=>'title', 'label'=>'Title', 'rules'=>'required'),
                   array('field'=>'inc_from', 'label'=>'Inclusive Dates', 'rules'=>'required'),
                   array('field'=>'inc_to', 'label'=>'Inclusive Dates', 'rules'=>'required'),
                   array('field'=>'no_of_hours', 'label'=>'No of hours', 'rules'=>'required'),
                   array('field'=>'conducted_by', 'label'=>'Conducted by', 'rules'=>'required'),
                   array('field'=>'attachments', 'label'=>'attachments')
                   
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){

        }
       else{
              $data['username'] = $this->session->userdata('username');            
              $userinfo = $this->employee->read($data['username']);
              foreach($userinfo as $i){
              $info = array(
                'id' => $i['id'],
              );
              $info;
            }       


            $trainingRecord=array(
                'title'=>$_POST['title'],
                'inc_from'=>$_POST['inc_from'],
                'inc_to'=>$_POST['inc_to'],
                'no_of_hours'=>$_POST['no_of_hours'],
                'conducted_by'=>$_POST['conducted_by'],
                'attachments'=>$_POST['attachments'],
                'employeeID'=>$info['id'],
                'username'=>$data['username']
                
            );
            $this->training->createtraining($trainingRecord);
            redirect('process_improvement/viewTraining');
            }
    }

    public function updateTraining(){

         $trainingRecord['title']=$title;
         $condition = array('title' => $title);
         $oldRecord = $this->training->read($condition);

         foreach($oldRecord as $o){
                $data['title']=$o['title'];
                $data['inc_from']=$o['inc_from'];
                $data['inc_to']=$o['inc_to'];
                $data['no_of_hours']=$o['no_of_hours'];
                $data['conducted_by']=$o['conducted_by'];
                $data['attachments']=$o['attachments'];
              }
         $rules = array(
              array('field'=>'title', 'label'=>'Title', 'rules'=>'required'),
                  );

            $this->form_validation->set_rules($rules);
            
            if($this->form_validation->run()==FALSE){

              $data1 = $_SESSION['username'];
                    $type= $this->employee->read($data1);
                    foreach($type as $t){
                      $ut= array(
                                  'type'=>$t['type']
                      );
                      $types[]=$ut;
                    }
                    $usertype['types'] = $types;
                    $this->load->view('include/header',$usertype);
                    $this->load->view('updateTrainingForm',$data);
                    $this->load->view('include/footer');
             }

           else{
          
                $newRecord=array(
                    'title'=>$_POST['title'],
                    'inc_from'=>$_POST['inc_from'],
                    'inc_to'=>$_POST['inc_to'],
                    'no_of_hours'=>$_POST['no_of_hours'],
                    'conducted_by'=>$_POST['conducted_by'],
                    'attachments'=>$_POST['attachments']
                     );
                    
                    $this->training->update_training($title,$newRecord);
                    redirect('process_improvement/viewTraining');
                 }
        }

     public function viewOvertimeRegular(){

        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $result_array = $this->ot->read($info['id']);
        $data['ot'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('otregular_view',$data);
        $this->load->view('include/footer');
        
        
    }

    public function addOT(){
        
        $rules = array(
                   array('field'=>'date_of_filing', 'label'=>'Date', 'rules'=>'required'),
                   array('field'=>'auto_OT', 'label'=>'Authorized Time', 'rules'=>'required'),
                   array('field'=>'aot_from', 'label'=>'Actual OT time start', 'rules'=>'required'),
                   array('field'=>'aot_to', 'label'=>'Actual OT time end', 'rules'=>'required'),
                   array('field'=>'hours_weekdays', 'label'=>'Hours Weekdays'),
                   array('field'=>'minutes_weekdays', 'label'=>'Minutes Weekdays'),
                   array('field'=>'hours_weekends', 'label'=>'Hours Weekends'),
                   array('field'=>'minutes_weekends', 'label'=>'Minutes Weekends'),
                   array('field'=>'task', 'label'=>'Tasks', 'rules'=>'required')
                   
                );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){

        }
       else{
              $data['username'] = $this->session->userdata('username');            
              $userinfo = $this->employee->read($data['username']);
              foreach($userinfo as $i){
              $info = array(
                'id' => $i['id'],
              );
              $info;
            }       
            $otRecord=array(
                'date_of_filing'=>$_POST['date_of_filing'],
                'auto_OT'=>$_POST['auto_OT'],
                'aot_from'=>$_POST['aot_from'],
                'aot_to'=>$_POST['aot_to'],
                'hours_weekdays'=>$_POST['hours_weekdays'],
                'minutes_weekdays'=>$_POST['minutes_weekdays'],
                'hours_weekends'=>$_POST['hours_weekends'],
                'minutes_weekends'=>$_POST['minutes_weekends'],
                'task'=>$_POST['task'],
                'employeeID'=>$info['id']
            );
            $this->ot->createot($otRecord);
            redirect('process_improvement/viewOvertimeRegular');
            }
    }

    public function viewSVLeave(){
     
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('sv_leave');
        $this->load->view('include/footer');
        
    }


public function addpropertyinfo(){

  $newRecord=array(
    'employeeID'=>$_POST['employeeID'],
    'lname'=>$_POST['lname'],
    'fname'=>$_POST['fname'],
    'mname'=>$_POST['mname'],
    'date_assigned'=>$_POST['date_assigned'],
    'qty'=>$_POST['qty'],
    'unit'=>$_POST['unit'],
    'property_name'=>$_POST['property_name'],
    'description'=>$_POST['description'],
    'date_purchased'=>$_POST['date_purchased'],
    'property_no'=>$_POST['property_no'],
    'classification_no'=>$_POST['classification_no'],
    'unit_value'=>$_POST['unit_value'],
    'mr_no'=>$_POST['mr_no'],
    );
                    
    $this->mr->createproperty($newRecord);
    redirect('process_improvement/viewMR');
}

public function addHoliday(){

  $rules = array(
                   array('field'=>'holiday_name', 'label'=>'Holiday Name', 'rules'=>'required'),
                   array('field'=>'holiday_date', 'label'=>'Holiday Date', 'rules'=>'required')
                 );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run()==FALSE){
               }
       else{
              $data['username'] = $this->session->userdata('username');            
              $userinfo = $this->employee->read($data['username']);
              foreach($userinfo as $i){
              $info = array(
                'id' => $i['id'],
              );
              $info;
            }

            $holiday = array(
              'holiday'=>$_POST['holiday_name'],
              'dates'=>$_POST['holiday_date']
            );
            $this->leavedb->createholiday($holiday);
            redirect('process_improvement/viewCalendar');
            }
    }

    public function viewCalendar(){

        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $result_array = $this->leavedb->calendar($info['id']);
        $data['holiday'] = $result_array; 
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);
        $this->load->view('calendar_view',$data);
        $this->load->view('include/footer');   
    }

  

 
}

    


?>




<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_Improvement extends CI_Controller {

    public function __construct()
    {
      parent::__construct();

      $this->load->library('session');
      $this->load->helper(array('form', 'url'));
      // $this->load->library('form_validation'); 
      $this->load->library(array('form_validation','ciqrcode','Pdf'));      
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

    public function login_validate()
    {
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
                foreach($userinfo as $i)
                {
                  $info = array(
                  'id' => $i['id'],
                  'username' => $i['username'],
                  'type'=> $i['type']
                   );
                  $info;
                }       
                    $data['success'] = true;  
                    redirect('process_improvement/viewCalendar', 'refresh');
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

    public function logout()
    {
        $this->load->driver('cache');
        $this->session->sess_destroy();
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('headername');
        $this->session->unset_userdata('logged_in');
        $this->cache->clean();
        ob_clean();
        redirect(base_url(), 'refresh');
    }

    public function changepassword() 
    {
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
        $this->load->view('changepass_view');
        $this->load->view('include/footer');  
      
    }
    
    public function submit_changepassword() 
    {
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $oldpassword = $_POST['oldpassword'];
        $success = $this->employee->passwordcheck($info['id']);
        foreach($success as $i){
          $password = array(
            'password'=>$i['password']
          );
        }
        if($password['password'] == $oldpassword){
          $newpassword = $_POST['newpassword'];
          $confirm = $_POST['confirmpassword'];
          if($newpassword == $confirm){
            $entered = $this->employee->updatepassword($newpassword, $info['id']);
            redirect('process_improvement/dashboard');    
          }else{
            $message = "Passwords do not match. \\nPlease try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('process_improvement/changepassword', 'refresh');
          }
          
        }else{
          $message = "Username and/or Password are incorrect.\\nTry again.";
          echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('process_improvement/changepassword', 'refresh');
        }
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

  public function dashboard_supervisor(){
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
       $this->load->view('dashboard_supervisor', $data);
       $this->load->view('include/footer');
  }

   public function dashboard_depthead(){
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
       $this->load->view('dashboard_depthead', $data);
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
        $data['supervisor'] = $this->employee->supervisors();
        $ra = $this->employee->readcredits();
        $data['leavecredit'] = $ra; 

        $this->load->view('include/header',$usertype);
        $this->load->view('employee_admin',$data);
        $this->load->view('include/footer');
        
    }
   
    public function addEmployee(){
      if($_POST['type'] == "Supervisor"){
        $employeeRecord=array(
                'employeeID'=>$_POST['employeeID'],
                'lname'=>$_POST['lname'],
                'fname'=>$_POST['fname'],
                'mname'=>$_POST['mname'],
                'username'=>$_POST['employeeID'],
                'type'=>$_POST['type'],
                'password'=> '12345',
                'pg_level'=>$_POST['pg_level'],
                'birthday'=>$_POST['birthday'],
                'date_hired'=>$_POST['date_hired'],
                'position'=>$_POST['position'],
                'email'=>$_POST['email'],
                'promo_date'=>$_POST['promo_date'],
                'civil_stat'=>$_POST['civil_stat'],
                'cp_no'=>$_POST['cp_no'],
                'supervisorID'=>$_POST['supervisorID']

            );
            $this->employee->createsupervisor($employeeRecord);
            redirect('process_improvement/viewEmployeeAdmin');
      }else{
            $employeeRecord=array(
                'employeeID'=>$_POST['employeeID'],
                'lname'=>$_POST['lname'],
                'fname'=>$_POST['fname'],
                'mname'=>$_POST['mname'],
                'username'=>$_POST['employeeID'],
                'type'=>$_POST['type'],
                'password'=> '12345',
                'pg_level'=>$_POST['pg_level'],
                'birthday'=>$_POST['birthday'],
                'date_hired'=>$_POST['date_hired'],
                'position'=>$_POST['position'],
                'email'=>$_POST['email'],
                'promo_date'=>$_POST['promo_date'],
                'civil_stat'=>$_POST['civil_stat'],
                'cp_no'=>$_POST['cp_no'],
                'supervisorID'=>$_POST['supervisorID']

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

    public function printleave($id){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $data1 = $_SESSION['username'];
        $type= $this->employee->remployee($info['id']);
        foreach($type as $t){
          $ut= array(
            'type'=>$t['type'],
            'supervisorID' => $t['supervisorID']
          );
          $types[]=$ut;
        }
        $supervisor= $this->employee->getSV($ut['supervisorID']);
        $data['supervisor']=$supervisor;
        $usertype['types'] = $types;
        $data['employee'] = $type;
        $printing = $this->leavedb->leaveread($id);
        $data['print'] = $printing;

       $this->load->view('include/header', $usertype);
       $this->load->view('print_leave', $data);
       $this->load->view('include/footer');
       
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

        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $supervisorinfo = $this->employee->remployee($info['id']);

        foreach ($supervisorinfo as $sv) {
          $use = array(
            'supervisorID'=>$sv['supervisorID']
          );
        }
        $supervisorname = $this->employee->getSV($use['supervisorID']);
        $data['supervisor'] = $supervisorname;


        $getcredits = $this->leavedb->getcredits($info['id']);
        $data['credits'] = $getcredits;

        $getholiday = $this->leavedb->getHoliday();
        $data['holidays'] = $getholiday;

        $this->load->view('include/header',$usertype);
        $this->load->view('leave_view',$data);
        $this->load->view('include/footer');   
    }

    public function viewLeaveEmployee(){
       $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
     
        $result_array = $this->leavedb->readleave($info['id']);
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

        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $supervisorinfo = $this->employee->remployee($info['id']);
        if($supervisorinfo!=null){
        foreach ($supervisorinfo as $sv) {
          $use = array(
            'supervisorID'=>$sv['supervisorID']
          );
        }
        $supervisorname = $this->employee->getSV($use['supervisorID']);
        $data['supervisor'] = $supervisorname;
        }else{
          $data['supervisor'] = "";
        }

        $getcredits = $this->leavedb->getcredits($info['id']);
        $data['credits'] = $getcredits;

        $getholiday = $this->leavedb->getHoliday();
        $data['holidays'] = $getholiday;

        $this->load->view('include/header',$usertype);
        $this->load->view('leave_supervisor',$data);
        $this->load->view('include/footer');   
    }

    public function viewLeaveCredits(){
     
        $result_array = $this->employee->readcredits();
        $data['leavecredit'] = $result_array; 
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
        $this->load->view('leave_credits',$data);
        $this->load->view('include/footer');   
    }

    public function addLeaveCredits(){
      $checking = $_POST['employeeID'];
      $result = $this->leavedb->check($checking);
      if($result!=null){
            $message = "Leave credits for this user is already set. \\nGo back.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('process_improvement/viewLeaveCredits', 'refresh');
        }else{
            $leaveCreditsRecord=array(
                'employeeID'=>$_POST['employeeID'],
                'lname'=>$_POST['lname'],
                'fname'=>$_POST['fname'],
                'mname'=>$_POST['mname'],
                'vacation'=>$_POST['vacation'],
                'sick'=>$_POST['sick'],
                'slp'=>$_POST['slp'],
                'others'=>$_POST['others']

            );
            $this->employee->createleavecredits($leaveCreditsRecord);
            redirect('process_improvement/viewLeaveCredits');
        }
    }

    public function updateLC($employeeID){
        $lcRecord['employeeID']=$employeeID;
        $condition = array('employeeID' => $employeeID);
        $oldRecord = $this->employee->read_credits($condition);
        
        foreach($oldRecord as $o){
                $data['employeeID']=$o['employeeID'];
                $data['lname']=$o['lname'];
                $data['fname']=$o['fname'];
                $data['mname']=$o['mname'];
                $data['vacation']=$o['vacation'];
                $data['sick']=$o['sick'];
                $data['slp']=$o['slp'];
                $data['others']=$o['others'];
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
                    $this->load->view('updateLeaveCredits',$data);
                    $this->load->view('include/footer');
             }
            else{
          
                $newRecord=array(
                    'employeeID'=>$employeeID,
                    'lname'=>$_POST['lname'],
                    'fname'=>$_POST['fname'],
                    'mname'=>$_POST['mname'],
                    'vacation'=>$_POST['vacation'],
                    'sick'=>$_POST['sick'],
                    'slp'=>$_POST['slp'],
                    'others'=>$_POST['others']
                     );
                    
                    $this->employee->update_credits($employeeID,$newRecord);
                    redirect('process_improvement/viewLeaveCredits');
                 }
        }

    public function delLC($id){
        $where_array = array('id'=>$id);
        $this->employee->del_credits($where_array);
        redirect('process_improvement/viewLeaveCredits');
      }

    public function addLeave(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $data1 = $_SESSION['username'];

        $getcredits = $this->leavedb->getcredits($info['id']);
        foreach($getcredits as $c){
          $credits = array(
            'vacation'=>$c['vacation'],
            'sick'=>$c['sick'],
            'slp'=>$c['slp'],
            'others'=>$c['others']
          );
        }

        $data['credits'] = $credits;

        if($_POST['desc_1']!=null){
            $type_info = $_POST['desc_1'];
            $remaining =  $credits['vacation'] - $_POST['no_of_days'];
            $this->leavedb->updatevacation($remaining, $info['id']);
           }
            
           else if(isset($_POST['desc_2'])){
            $type_info = $_POST['desc_2'];
            $remaining =  $credits['sick'] - $_POST['no_of_days'];
            $this->leavedb->updatesick($remaining, $info['id']);
           }
            
           else if($_POST['desc_3']!=null){
            $type_info = $_POST['desc_3'];
           }
            
           else if($_POST['desc_4']!=null){
            $type_info = $_POST['desc_4'];
            $remaining =  $credits['others'] - $_POST['no_of_days'];
            $this->leavedb->updateother($remaining, $info['id']);
           }

           else if(isset($_POST['desc_5'])){
            $type_info = $_POST['desc_5'];
            $remaining =  $credits['slp'] - $_POST['no_of_days'];
            $this->leavedb->updateslp($remaining, $info['id']);
           }

           else{
            $type_info = "Inside the Country";
            $remaining =  $credits['vacation'] - $_POST['no_of_days'];
            $this->leavedb->updatevacation($remaining, $info['id']);           
           }
        $leaveRecord=array(
                'employeeID'=>$info['id'],
                'date_of_filing'=>$_POST['date_of_filing'],
                'type'=>$_POST['type'],
                'type_info'=>$type_info,
                'no_of_days'=>$_POST['no_of_days'],
                'inc_from' =>$_POST['inc_from'],
                'inc_to' =>$_POST['inc_to'],
                'supervisorID'=>$_POST['supervisorID'], 
                'status'=>"pending" 
            );

            
            $this->leavedb->createleave($leaveRecord);
            redirect('process_improvement/viewLeave');
            
    }

    public function addLeaveSupervisor(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $data1 = $_SESSION['username'];

        $getcredits = $this->leavedb->getcredits($info['id']);
        foreach($getcredits as $c){
          $credits = array(
            'vacation'=>$c['vacation'],
            'sick'=>$c['sick'],
            'slp'=>$c['slp'],
            'others'=>$c['others']
          );
        }

        $data['credits'] = $credits;

        if($_POST['desc_1']!=null){
            $type_info = $_POST['desc_1'];
            $remaining =  $credits['vacation'] - $_POST['no_of_days'];
            $this->leavedb->updatevacation($remaining, $info['id']);
           }
            
           else if(isset($_POST['desc_2'])){
            $type_info = $_POST['desc_2'];
            $remaining =  $credits['sick'] - $_POST['no_of_days'];
            $this->leavedb->updatesick($remaining, $info['id']);
           }
            
           else if($_POST['desc_3']!=null){
            $type_info = $_POST['desc_3'];
           }
            
           else if($_POST['desc_4']!=null){
            $type_info = $_POST['desc_4'];
            $remaining =  $credits['others'] - $_POST['no_of_days'];
            $this->leavedb->updateother($remaining, $info['id']);
           }

           else if(isset($_POST['desc_5'])){
            $type_info = $_POST['desc_5'];
            $remaining =  $credits['slp'] - $_POST['no_of_days'];
            $this->leavedb->updateslp($remaining, $info['id']);
           }

           else{
            $type_info = "Inside the Country";
            $remaining =  $credits['vacation'] - $_POST['no_of_days'];
            $this->leavedb->updatevacation($remaining, $info['id']);           
           }
        $leaveRecord=array(
                'employeeID'=>$info['id'],
                'date_of_filing'=>$_POST['date_of_filing'],
                'type'=>$_POST['type'],
                'type_info'=>$type_info,
                'no_of_days'=>$_POST['no_of_days'],
                'inc_from' =>$_POST['inc_from'],
                'inc_to' =>$_POST['inc_to'],
                'supervisorID'=>'2019-0001-0001', 
                'status'=>"pending" 
            );

            
            $this->leavedb->createleave($leaveRecord);
            redirect('process_improvement/viewLeaveEmployee');
            
    }

   public function viewMRAdmin(){
        $result_array = $this->mr->readmrall();
        $ra = $this->mr->readapprove();
        $data['approve'] = $ra;
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
        // $result_array3 = $this->mr->readmrall();        
        // if($result_array3!= null){
        //     foreach($result_array3 as $i){
        //       $info = array(
        //         'property_no' => $i['property_no'],
        //         'employee_name' => $i['lname'].", ".$i['fname']." ".$i['mname'],
        //         'dateassigned' => $i['dateassigned']
        //       );
        //       $mr[]=$info;
        //     }        
        //     $notification['mr_notification'] = $mr;        
        // } 
        $this->load->view('include/header',$usertype);        
        $this->load->view('mradmin_view',$data);
        $this->load->view('include/footer');
        }


    public function viewMR(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $result_array = $this->mr->readmr($info['id']);
        $data['mr'] = $result_array; 
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
        $this->load->view('mr_view',$data);
        $this->load->view('include/footer');
        }
 
 public function pullout(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 
        $result_array = $this->mr->readmrall();
        $ra = $this->mr->readapprove();
        $data['approve'] = $ra; 
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
        $this->load->view('pullout_properties',$data);
        $this->load->view('include/footer');
        }

 public function unassignedProperties(){
        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id'],
            );
            $info;
        } 

        $result_array = $this->mr->emptyProp();
        $result_array1 = $this->mr->unassignedProp();
        $data['mrRecord'] = $result_array; 
        $data['mrs'] = $result_array1;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
         $getmr = $this->mr->unassigned();
        if($getmr!=null){
          foreach($getmr as $g){
          $mr = array(
            'date_assigned'=>$g['date_assigned'],
            'qty'=>$g['qty'],
            'unit'=>$g['unit'],
            'property_name'=>$g['property_name'],
            'description'=>$g['description'],
            'date_purchased'=>$g['date_purchased'],
            'classification_no'=>$g['classification_no'],
            'unit_value'=>$g['unit_value'],
            'total_value'=>$g['total_value'],
            'mr_no'=>$g['mr_no'],
            'status'=>$g['status'],
            'property_no'=>$g['property_no']
          );
          $memo[] = $mr;
          }        
        }else{
          $memo = null;
        }


        $data['memo'] = $memo;
        $usertype['types'] = $types;
        $this->load->view('include/header',$usertype);        
        $this->load->view('unassigned_properties',$data);
        $this->load->view('include/footer');
        }


   public function viewProperties(){
        $result_array = $this->mr->emptyProp();
        $result_array1 = $this->mr->unassignedProp();
        $data['mrRecord'] = $result_array; 
        $data['mrs'] = $result_array1;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;


        $getmr = $this->mr->unassigned();
        if($getmr!=null){
          foreach($getmr as $g){
          $mr = array(
            'date_assigned'=>$g['date_assigned'],
            'qty'=>$g['qty'],
            'unit'=>$g['unit'],
            'property_name'=>$g['property_name'],
            'description'=>$g['description'],
            'date_purchased'=>$g['date_purchased'],
            'classification_no'=>$g['classification_no'],
            'unit_value'=>$g['unit_value'],
            'total_value'=>$g['total_value'],
            'mr_no'=>$g['mr_no'],
            'status'=>$g['status'],
            'property_no'=>$g['property_no']
          );
          $memo[] = $mr;
          }        
        }else{
          $memo = null;
        }


        $data['memo'] = $memo;
        $this->load->view('include/header',$usertype);
        $this->load->view('property_view',$data);
        $this->load->view('include/footer');
        }

  public function qrcode(){
        $result_array = $this->mr->read1();
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


    public function editProperties($property_no){
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
            $this->load->view('editPropertyForm',$data);
            $this->load->view('include/footer');

          }
    public function addpropertydetails(){
      $property_no = $_POST['property_no'];
      $assign = array(
        'employeeID'=>$_POST['employeeID'],
        'lname'=>$_POST['lname'],
        'fname'=>$_POST['fname'],
        'mname'=>$_POST['mname']
      );
      $this->mr->assignMR($property_no, $assign);
      redirect('process_improvement/viewProperties');
    }


    public function assignProperties($property_no){
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

        $getunass = $this->mr->getunass($property_no);
        $data['getted'] = $getunass;
            $usertype['types'] = $types;
            $this->load->view('include/header',$usertype);
            $this->load->view('assignPropertyForm',$data);
            $this->load->view('include/footer');

          }

    public function updateMR($property_no){

         $records['property_no']=$property_no;
         $condition = array('property_no' => $property_no);
         $oldRecord = $this->mr->read1($condition);

         foreach($oldRecord as $o){
                $data['property_no']=$o['property_no'];
                $data['employeeID']=$o['employeeID'];
                $data['lname']=$o['lname'];
                $data['fname']=$o['fname'];
                $data['mname']=$o['mname'];
                $data['date_assigned']=$o['date_assigned'];
                $data['qty']=$o['qty'];
                $data['unit']=$o['unit'];
                $data['property_name']=$o['property_name'];
                $data['description']=$o['description'];
                $data['date_purchased']=$o['date_purchased'];
                $data['classification_no']=$o['classification_no'];
                $data['unit_value']=$o['unit_value'];
                $data['total_value']=$o['total_value'];
                $data['mr_no']=$o['mr_no'];
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
                    $this->load->view('updatePropertyForm',$data);
                    $this->load->view('include/footer');
             }
          else{
          $newRecord=array(
             'property_no'=>$_POST['property_no'],
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
             'classification_no'=>$_POST['classification_no'],
             'unit_value'=>$_POST['unit_value'],
             'total_value'=>$_POST['total_value'],
             'mr_no'=>$_POST['mr_no'],
            );
          $this->mr->update_mr($property_no,$newRecord);
          redirect('process_improvement/viewMRAdmin');
          }
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

    public function updateTraining($id){

         $trainingRecord['id']=$id;
         $condition = array('id' => $id);
         $oldRecord = $this->training->read_training($condition['id']);

         foreach($oldRecord as $o){
                $data['id']=$o['id'];
                $data['title']=$o['title'];
                $data['inc_from']=$o['inc_from'];
                $data['inc_to']=$o['inc_to'];
                $data['no_of_hours']=$o['no_of_hours'];
                $data['conducted_by']=$o['conducted_by'];
                $data['attachments']=$o['attachments'];
              }
          $rules = array(
                      array('field'=>'title', 'label'=>'title', 'rules'=>'required'),      
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
                    $this->training->update_training($id,$newRecord);
                    redirect('process_improvement/viewTraining');
          }
        }
    public function delTraining($id){
        $where_array = array('id'=>$id);
        $this->training->del($where_array);
        redirect('process_improvement/viewTraining');
          }

     public function viewOvertime(){

        $data['username'] = $this->session->userdata('username');            
        $userinfo = $this->employee->read($data['username']);
        foreach($userinfo as $i){
          $info = array(
              'id' => $i['id']
            );
            $info;
        } 
        $supervisorinfo = $this->employee->read_employees();
        $supervisorname = $this->employee->supervisors();
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

        $ot = $this->ot->getOT($info['id']);

        $newresult_array = $this->employee->remployee($info['id']);
        $data['name'] = $newresult_array;
        $data['supervisor'] = $supervisorname;
        $data['getot'] = $ot;

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

            $hw;    
            $mw;
            $he;
            $me;
            $month;
            if($_POST['month']=="January"){
              $month = "jan";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="February"){
              $month = "feb";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="March"){
              $month = "mar";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="April"){
              $month = "apr";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="May"){
              $month = "may";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="June"){
              $month = "june";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="July"){
              $month = "july";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="August"){
              $month = "aug";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="September"){
              $month = "sept";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="October"){
              $month = "oct";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="November"){
              $month = "nov";
              $allotted = $_POST['allotted'];
            }else if($_POST['month']=="December"){
              $month = "dec";
              $allotted = $_POST['allotted'];
            }

            $this->ot->updateot($info['id'], $month, $allotted);

            if($_POST['hours_weekdays']!=null){
              $hw = $_POST['hours_weekdays'];
            }else{
              $hw = '00';
            }

            if($_POST['minutes_weekdays']!=null){
              $mw = $_POST['minutes_weekdays'];
            }else{
              $mw = '00';
            }

            if($_POST['hours_weekends']!=null){
              $he = $_POST['hours_weekends'];
            }else{
              $he = '00';
            }

            if($_POST['minutes_weekends']!=null){
              $me = $_POST['minutes_weekends'];
            }else{
              $me = '00';
            }

            $otRecord=array(
                'date_of_filing'=>$_POST['date_of_filing'],
                'auto_OT'=>$_POST['auto_OT'],
                'aot_from'=>$_POST['aot_from'],
                'date_of_ot'=>$_POST['date_of_ot'],
                'aot_to'=>$_POST['aot_to'],
                'hours_weekdays'=> $hw,
                'minutes_weekdays'=>$mw,
                'hours_weekends'=>$he,
                'minutes_weekends'=>$me,
                'task'=>$_POST['task'],
                'employeeID'=>$info['id'],
                'authorized_by'=>$_POST['super'],
                'status'=>'Pending'
            );

            $this->ot->createot($otRecord);
            redirect('process_improvement/viewOvertime');
            }
    }

    public function viewSVLeave($id=null){
      $data['ot'][0]["id"] = null;
      $data['active'] = "Leave";
      $ids = "2019-0001-0001";
        $result_array = $this->leavedb->getallLeavesuper($ids);
        echo $id;
        if($result_array != null){
            foreach($result_array as $i){
              $info = array(
                'date_of_filing' => $i['date_of_filing'],
                'employeeID' => $i['employeeID'],
                'type' => $i['type'],
                'no_of_days' => $i['no_of_days'],
                'inc_from' => $i['inc_from'],
                'inc_to' => $i['inc_to'],
/*                'employee_name' => $i['lname'].", ".$i['fname']." ".$i['mname'],*/
                'id' => $i['id']
              );
              $leave[]=$info;
            }        
            $empname = $this->leavedb->getemp($info['employeeID']);
            foreach($empname as $e){
              $get = array(
                'employee_name'=>$e['lname'].", ".$e['fname']." ".$e['mname']
              );
            }
            $data['name'] = $get;
            $data['leave_pending'] = $leave;
            $data2['leave_pending'] = $leave;
        }
        $result_array2 = $this->leavedb->getallOT();
        if($result_array2 != null){
            foreach($result_array2 as $i){
              $info = array(
                'date_of_filing' => $i['date_of_filing'],
                'employeeID' => $i['employeeID'],
                'date_of_ot' => $i['date_of_ot'],
                'auto_OT' => $i['auto_OT'],
                'aot_from' => $i['aot_from'],
                'aot_to' => $i['aot_to'],
                'employee_name' => $i['lname'].", ".$i['fname']." ".$i['mname'],
                'id' => $i['id'],
                'hours_weekends' => $i['hours_weekends'],
                'minutes_weekends' => $i['minutes_weekends'],
                'hours_weekdays' => $i['hours_weekdays'],
                'minutes_weekdays' => $i['minutes_weekdays'],
                'task' => $i['task'],
                'status' => $i['status'],
                'authorized_by' => $i['authorized_by'],
                'remarks' => $i['remarks']
              );
              $ot[]=$info;
            }        
            $data['ot_pending'] = $ot;
            $data2['ot_pending'] = $ot;
        }
        if($id != null){
        // $getvalues = $this->leavedb->getdata($id);
        $getvalues = $this->leavedb->getLeave($id);
        $data['leave'] = $getvalues;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
     
          if($data['leave'][0]['status'] == 'pending'){
            $this->load->view('include/header',$usertype);
          $this->load->view('sv_leave',$data);
          $this->load->view('include/footer');            
          } else{
          $this->load->view('include/header',$usertype);
          $this->load->view('sv_leave',$data2);
          $this->load->view('include/footer');                    
          }
        } else{
        //   $getvalues = $this->leavedb->getdata($id);
        // $data['leave'] = $getvalues;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        // print_r($data['leave']);
        $this->load->view('include/header',$usertype);
        $this->load->view('sv_leave', $data);
        $this->load->view('include/footer');
        }      
    }
    public function viewMrNotification($id=null){
        if($id != null){
        // $getvalues = $this->leavedb->getdata($id);
        $getvalues = $this->leavedb->getMr($id);
        $data['mr'] = $getvalues;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        // print_r($data);
        $this->load->view('include/header',$usertype);
        $this->load->view('sv_leave',$data);
        $this->load->view('include/footer');          
        } else{
        //   $getvalues = $this->leavedb->getdata($id);
        // $data['leave'] = $getvalues;
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
    }
    public function viewOT($id=null){
      $data['leave'][0]["id"] = null;
      $data['active'] = "OT";
      $result_array = $this->leavedb->getallLeave();
        if($result_array != null){
            foreach($result_array as $i){
              $info = array(
                'date_of_filing' => $i['date_of_filing'],
                'employeeID' => $i['employeeID'],
                'type' => $i['type'],
                'no_of_days' => $i['no_of_days'],
                'inc_from' => $i['inc_from'],
                'inc_to' => $i['inc_to'],
                'employee_name' => $i['lname'].", ".$i['fname']." ".$i['mname'],
                'id' => $i['id']
              );
              $leave[]=$info;
            }        
            $data['leave_pending'] = $leave;
            $data2['leave_pending'] = $leave;
        }
        $result_array2 = $this->leavedb->getallOT($id);
        if($result_array2 != null){
            foreach($result_array2 as $i){
              $info = array(
                'date_of_filing' => $i['date_of_filing'],
                'employeeID' => $i['employeeID'],
                'date_of_ot' => $i['date_of_ot'],
                'auto_OT' => $i['auto_OT'],
                'aot_from' => $i['aot_from'],
                'aot_to' => $i['aot_to'],
                'employee_name' => $i['lname'].", ".$i['fname']." ".$i['mname'],
                'id' => $i['id'],
                'hours_weekends' => $i['hours_weekends'],
                'minutes_weekends' => $i['minutes_weekends'],
                'hours_weekdays' => $i['hours_weekdays'],
                'minutes_weekdays' => $i['minutes_weekdays'],
                'task' => $i['task'],
                'status' => $i['status'],
                'authorized_by' => $i['authorized_by'],
                'remarks' => $i['remarks']
              );
              $ot[]=$info;
            }        
            $data['ot_pending'] = $ot;
            $data2['ot_pending'] = $ot;
        }
        if($id != null){
        // $getvalues = $this->leavedb->getdata($id);
        $getvalues = $this->leavedb->getOT($id);
        $data['ot'] = $getvalues;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        // print_r($data['ot_pending']);
        $this->load->view('include/header',$usertype);
        $this->load->view('sv_leave',$data);
        $this->load->view('include/footer');          
        } else{
        //   $getvalues = $this->leavedb->getdata($id);
        // $data['leave'] = $getvalues;
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
    }

    public function approveleave(){
        $id = $_POST['id'];
        $result_array = $this->leavedb->approveleave($id);
        redirect('process_improvement/viewcalendar');
    }
    public function disapproveleave(){
        $id = $_POST['id'];
        $datas = $this->leavedb->diapproveleave($id);
        redirect('process_improvement/viewcalendar');
    }
    public function approveot(){
        $id = $_POST['id'];
        $result_array = $this->leavedb->approveot($id);
        redirect('process_improvement/viewcalendar');
    }
    public function disapproveot(){
        $id = $_POST['id'];
        $remarks = $_POST['remarks'];
        $datas = $this->leavedb->diapproveot($id,$remarks);
        redirect('process_improvement/viewcalendar');
    }

    public function approvemr(){
        $id = $_POST['id'];
        echo $id;
        $result_array = $this->mr->approvemr($id);
        redirect('process_improvement/viewMRAdmin');
    }    


public function addpropertyinfo(){

  $newRecord=array(
    'date_assigned'=>$_POST['date_assigned'],
    'qty'=>$_POST['qty'],
    'unit'=>$_POST['unit'],
    'property_name'=>$_POST['property_name'],
    'description'=>$_POST['description'],
    'date_purchased'=>$_POST['date_purchased'],
    'property_no'=>$_POST['property_no'],
    'classification_no'=>$_POST['classification_no'],
    'unit_value'=>$_POST['unit_value'],
    'total_value'=>$_POST['total_value'],
    'mr_no'=>$_POST['mr_no'],
    );
                    
    $this->mr->createproperty($newRecord);
    redirect('process_improvement/viewProperties');
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

    public function updateHoliday($id){
         $calendar = $this->leavedb->readholiday($id);
         foreach($calendar as $o){
          $holiday = array(
                'holiday'=> $o['holiday'],
                'dates' => $o['dates'],
                'id' => $o['id']
              );
              }  
              $rules = array(
                   array('field'=>'holiday', 'label'=>'Holiday Name', 'rules'=>'required'),
                  
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
                    $this->load->view('updateHolidayForm',$holiday);
                    $this->load->view('include/footer');
             }
          else{
          $newRecord=array(
             'holiday'=>$_POST['holiday'],
             'dates'=>$_POST['dates']
            );
          $this->leavedb->update_holiday($id,$newRecord);
          redirect('process_improvement/viewCalendar');
          }
        }

     public function delHoliday($id){
        $where_array = array('id'=>$id);
        $this->leavedb->delHoliday($where_array);
        redirect('process_improvement/viewCalendar');
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

        $result_array = $this->leavedb->readallholidays();
        $result_array1 = $this->employee->read_employees();
        $data['holiday'] = $result_array; 
        $data['emp'] = $result_array1;
        $data1 = $_SESSION['username'];
        $type= $this->employee->read($data1);
        foreach($type as $t){
          $ut= array(
                      'type'=>$t['type']
          );
          $types[]=$ut;
        }
        $usertype['types'] = $types;
        $data['types'] = $types;
        $data['total'] = $this->training->read($info['id']);
        $data['training'] = $this->training->readtraining();
        $data['prop'] = $this->mr->readmr($info['id']);

        $allprop = $this->mr->getallprop();
        $allprop2 = $this->mr->getallprop2();
        if($allprop!=null && $allprop2!=null)
          $data['allprop'] = count($allprop) + count($allprop2);
        else if ($allprop!=null)
          $data['allprop'] = count($allprop);
        else if ($allprop2!=null)
          $data['allprop'] = count($allprop2);
        else
          $data['allprop'] = 0;
        $this->load->view('include/header',$usertype);
        $this->load->view('calendar_view',$data);
        $this->load->view('include/footer');   
    }

    public function do_upload()
    {
      if(!empty($_FILES['uploaded_file']))
      {
    $path = "./assets/uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
      }
    
    }

  public function getemployeename(){
    $employeeID = $this->input->post('employeeID');
    $infos = $this->employee->getinfo($employeeID);
    foreach($infos as $i){
      $info = array(
        'lname'=>$i['lname'],
        'fname'=>$i['fname'],
        'mname'=>$i['mname']
      );
    }
    echo json_encode($info);
  }


  public function pulloutMr($id){

    $result_array = $this->mr->getmr($id);

    foreach ($result_array as $mr) {
      $getmr = array(
        'employeeID' => $mr['employeeID'],
        'lname'=> $mr['lname'],
        'fname'=> $mr['fname'],
        'mname'=> $mr['mname'],
        'date_assigned'=> $mr['date_assigned'],
        'qty'=> $mr['qty'],
        'unit'=> $mr['unit'],
        'property_name'=> $mr['property_name'],
        'description'=> $mr['description'],
        'date_purchased'=> $mr['date_purchased'],
        'property_no'=> $mr['property_no'],
        'classification_no'=> $mr['classification_no'],
        'unit_value'=> $mr['unit_value'],
        'total_value'=> $mr['total_value'],
        'mr_no'=> $mr['mr_no'],
        'status'=> $mr['status']
      );
    }
    if($getmr['status'] == "pending"){
      $id = $getmr['property_no'];
      $this->mr->updatemr($id);
    }else if($getmr['status'] == "approved"){
    $this->mr->backupmr($getmr);
    $delete = $this->mr->deleteMr($id);
    }else if($getmr['status'] == "disapproved"){
      $id = $getmr['property_no'];
      $this->mr->updatedismr($id);
    } else if($getmr['status'] == "unassigned"){      
      $this->mr->updateMRtoPending($id);
    }
     redirect('process_improvement/viewMR');
  
    }

    public function returnmr(){
      $result = $this->mr->getmemo($_POST['id']);
      redirect('process_improvement/viewMRAdmin');
    }
 
}
    


?>




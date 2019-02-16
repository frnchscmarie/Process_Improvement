<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My 201</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/css/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/css/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/css/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets/css/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">
     <!-- bootstrap-wysiwyg -->
    <link href="../assets/css/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../assets/css/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../assets/css/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../assets/css/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('/assets/css/build/css/custom.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/build/css/custom.css'); ?>" rel="stylesheet">

<!--     <script src="<?php echo base_url('/assets/js/multiple_selection.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/search.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/js/select.js'); ?>"></script> -->
   <script type="text/javascript" src="<?php echo base_url('/assets/js/validation.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.PrintArea.js'); ?>"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" style="position: fixed;">
          <div class="left_col scroll-view">

            <div class="navbar nav_title">
              <a href="<?php echo base_url('process_improvement/dashboard'); ?>" class="site_title" ><i class="fa fa-institution" style="margin-left: 6%;"></i> <span >RBSD-IMS</span></a>
            </div>

            <div class="clearfix"></div>
            <br/>

            <!-- menu profile quick info (left side) -->
            <div class="profile clearfix">
                <div class="profile_pic">
                 <a href="<?php echo base_url('process_improvement/EmployeeProfile')?>"> <img src="<?php echo base_url('assets/css/build/images/sampleuser.png'); ?>" alt="..." class="img-circle profile_img"> </a>
                </div>

                <div class="profile_info">
                 <span>Welcome,</span>
                <h2><?php echo($_SESSION['username'])?></h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="margin-top: -10%;">
              <div class="menu_section" >
                <?php foreach ($types as $usertype)
                {
                    if($usertype['type']=='admin')
                    {
                ?>
                <!--START -->
                <ul class="nav side-menu">
                  
                  <li><a href="<?php echo base_url('process_improvement/viewcalendar')?>"> <i class="fa fa-home"></i> HOME </a>
                  </li>
                  <!--<li><a href="<?php echo base_url('process_improvement/EmployeeProfile')?>"> <i class="fa fa-user"></i> PROFILE </a>
                  </li>-->
                  <li><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin')?>"> <i class="fa fa-user-secret"></i>EMPLOYEE ADMIN</a>
                  </li>
               
                 <li>
                  <a href="<?php echo base_url('process_improvement/viewProperties')?>"> <i class="fa fa-qrcode"></i>PROPERTY</a>
                  </li>
          
                  <li>
                  <a href="<?php echo base_url('process_improvement/viewMR')?>"> <i class="fa fa-desktop"></i>MR ADMIN</a>
                  </li>
                
                  <li>
                    <a href="<?php echo base_url('process_improvement/viewTrainingAdmin')?>"> <i class="fa fa-comment-o"></i>TRAINING ADMIN</a>
                  </li>
                </ul>
                <!-- end -->
                <?php 
                  }
                

                else if($usertype['type']=='superadmin')
                {
                ?>
                <!--START ( SUPER ADMIN)-->
                <ul class="nav side-menu">
                      <li><a href="<?php echo base_url('process_improvement/dashboard_supervisor')?>"> <i class="fa fa-home"></i> HOME </a>
                      </li>  

                      <li><a href="<?php echo base_url('process_improvement/viewLeave')?>" > <i class="fa fa-calendar"></i>LEAVE </a>
                       </li>

                      <li><a href="<?php echo base_url('process_improvement/viewSVLeave')?>"><i class="fa fa-info"></i>SUPERVISOR</a>
                      </li>
                </ul>
                <!-- end -->
                <?php
              }
                else if($usertype['type']=='depthead')
                {
                ?>
                <!--START ( DEPT HEAD)-->
                <ul class="nav side-menu">
                      <li><a href="<?php echo base_url('process_improvement/dashboard_depthead')?>"> <i class="fa fa-home"></i> HOME </a>
                      </li>  

                      <li><a href="<?php echo base_url('process_improvement/viewSVLeave')?>"><i class="fa fa-info"></i>SUPERVISOR</a>
                      </li>
                </ul>

             
                <?php 
                }
                else if($usertype['type']=="employee")
                {
                  ?>
                  <ul class="nav side-menu">
                  <!--<li><a href="<?php echo base_url('process_improvement/EmployeeProfile')?>"> <i class="fa fa-user"></i>PROFILE</a>
                  </li>-->
                  <li><a href="<?php echo base_url('process_improvement/dashboard')?>"> <i class="fa fa-home"></i> HOME </a>
                  </li>
                  <li><a href="<?php echo base_url('process_improvement/viewLeave')?>" > <i class="fa fa-calendar"></i>LEAVE </a>
                  </li>
                  <li><a href="<?php echo base_url('process_improvement/viewOvertimeRegular')?>"><i class="fa fa-clock-o"></i>OVERTIME  </a>
                  </li>
                  <li><a href="<?php echo base_url('process_improvement/viewMR')?>"> <i class="fa fa-user"></i>MR</a>
                  </li>
                  <li>
                   <a href="<?php echo base_url('process_improvement/viewTraining')?>"> <i class="fa fa-book"></i>TRAINING</a>
                  </li>
                </ul>
                  <?php
                }
                
              }
              ?>
              </div>
              <div class="menu_section">
                
                <ul class="nav side-menu">            
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
            <!-- menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="<?php echo base_url('process_improvement/EmployeeProfile'); ?>" data-toggle="tooltip" data-placement="top" title=" Profile" > <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
             

              <a href="<?php echo base_url('process_improvement/changepassword'); ?>" data-toggle="tooltip" data-placement="top" title=" Change Password" ><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
         

              <a href="<?php echo base_url(''); ?>" data-toggle="tooltip" data-placement="top" title=" Help" > <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></a>
             

              <a href="<?php echo base_url('process_improvement/logout'); ?>" data-toggle="tooltip" data-placement="top" title="Log out" ><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
              
              
            </div>

            <!-- /menu footer buttons -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <img src="images/img.jpg" alt="">Welcome, <?php echo($_SESSION['username'])?>!
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                     <li><a href="<?php echo base_url('process_improvement/EmployeeProfile')?>"><i class="fa fa-user pull-right"></i> Profile</a></li>
                    <li><a href="<?php echo base_url('process_improvement/changepassword'); ?>"><i class="fa fa-lock pull-right"></i> Change Password</a></li>
                    <li><a href="<?php echo base_url('process_improvement/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

<!--start of notif-->
<li role="presentation" class="dropdown" id="notif_tag">
  <!-- <a  class="dropdown-toggle info-number"  aria-expanded="true">
    <i class="fa fa-envelope-o"></i>
    <span class="badge bg-green">1</span>
  </a> -->
  <a class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="true" id="notif_head">
  <!-- <a class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false" id="notif_head"> -->
    <!-- <i class="fa fa-envelope-o"></i>
    <span class="badge bg-green" ></span> -->
    
  </a>
  <ul id="notification_tab" class="dropdown-menu list-unstyled msg_list " role="menu">
   <!--  <li>
      <a> 
        <span>
        <span>FOR APPROVAL</span>
        <span class="time">30 minutes ago</span>
        </span>

        <span class="message">Ms. Cortez has requested a leave of absence! Please give your remarks.</span>
      </a>
    </li> -->

  </ul>
</li>
<!--end of notifs-->


              </ul>
            </nav>
          </div>
        </div>

<!-- notification -->
<!--  -->

<script type="text/javascript">
  $(document).ready(function(){
    //notif
    $.ajax({
      type: "POST",
      url: "<?php echo site_url('login/header_user') ?>",
      success: function(data){
        console.log("userlevel");
        var user = JSON.parse(data);
        console.log(user["type"][0]["type"]);
        if((user["type"][0]["type"] != "depthead")&&user["type"][0]["type"] != "superadmin"){
          $("#notif_tag").hide();
        }
      }
    });
    //ot
    $.ajax({
      type: "POST",
      url: "<?php echo site_url('notification_controller/ot_notification') ?>",      
      success: function(data){
        console.log("notification");
        console.log(data);
        var notifs = JSON.parse(data);
        var count = Object.keys(notifs["ot_notification"]).length;
        console.log(notifs);
        console.log(count);
        // console.log(notifs["ot_notification"][0]["employee_name"]);
        var notif_head = '<i class="fa fa-envelope-o"></i>'
                      +'<span class="badge bg-green" >'+count+'</span>';
        $("#notif_head").html(notif_head);
        for(var a=0; a<count; a++){
            var notif ='<li><a><span><span>FILED AN OVER TIME</span>'
                  +'<span class="time">'+notifs["ot_notification"][a]["date_of_filing"]+'</span>'
                  +'</span><span class="message">'+notifs["ot_notification"][a]["employee_name"]+' has requested an over time! Please give your remarks.</span></a></li>';
            
            $("#notification_tab").append(notif);

        }        
      }
    });
    //leave
   
  });
</script>
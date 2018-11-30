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
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/build/css/custom.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/build/css/custom.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/multiple_selection.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/search.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/select.js'); ?>"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0; margin-top: 5%;">
              <img src="<?php echo base_url('assets/css/build/images/landbank.png'); ?>" alt="..." style="margin-left: 20%; width: 45%; height: 80%;" />
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="<?php echo base_url('assets/css/build/images/sampleuser.png'); ?>" alt="..." class="img-circle profile_img">
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
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section" >
                <?php foreach ($types as $usertype)
                {
                    if($usertype['type']=='admin')
                    {
                ?>
                <!--START -->
                <ul class="nav side-menu">
                  
                  <li><a href="<?php echo base_url('process_improvement/EmployeeProfile')?>"> <i class="fa fa-user"></i> PROFILE </a>
                  </li>
                  <li><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin')?>"> <i class="fa fa-user-secret"></i>EMPLOYEE ADMIN</a>
                  </li>
            
          
                  <li>
                  <a href="<?php echo base_url('process_improvement/viewProperties')?>"> <i class="fa fa-user-secret"></i>MR ADMIN</a>
                  </li>
                
                  <li>
                    <a href="<?php echo base_url('process_improvement/viewTrainingAdmin')?>"> <i class="fa fa-user-secret"></i>TRAINING ADMIN</a>
                  </li>

                </ul>
                <!-- end -->
                <?php 
                  }
                

                else if($usertype['type']=='superadmin')
                {
                ?>
                <!--START -->
                <ul class="nav side-menu">
                  
                  

                  <li><a href="<?php echo base_url('process_improvement/viewSVLeave')?>"><i class="fa fa-info"></i>SUPERVISOR</a>
                  </li>
          
                  
                
                  

                </ul>
                <!-- end -->
                <?php 
                }
                else if($usertype['type']=="employee")
                {
                  ?>
                  <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('process_improvement/EmployeeProfile')?>"> <i class="fa fa-user"></i> PROFILE </a>
                  </li>
                  <li><a href="<?php echo base_url('process_improvement/viewLeave')?>" > <i class="fa fa-calendar"></i>LEAVE </a>
                  </li>
                  <li><a><i class="fa fa-clock-o"></i> OVERTIME <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('process_improvement/viewOvertimeRegular')?>">REGULAR EMPLOYEE</a></li>
                      <li><a href="<?php echo base_url('process_improvement/viewOvertimeContractual')?>">CONTRACTUAL EMPLOYEE</a></li>
                    </ul>
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
                    
                    
                    <li><a href="<?php echo base_url('knoxville/changepass'); ?>"><i class="fa fa-lock pull-right"></i> Change Password</a></li>
                    <li><a href="<?php echo base_url('process_improvement/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

<!--start of notif-->
<li role="presentation" class="dropdown open">
  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="true">
    <i class="fa fa-envelope-o"></i>
    <span class="badge bg-green">1</span>
  </a>
  <ul id="menu1" class="dropdown-menu list-unstyled msg_list " role="menu">
    <li>
      <a> 
        <span>
        <span>FOR APPROVAL</span>
        <span class="time">30 minutes ago</span>
        </span>

        <span class="message">Ms. Cortez has requested a leave of absence! Please give your remarks.</span>
      </a>
    </li>

  </ul>
</li>
<!--end of notifs-->


              </ul>
            </nav>
          </div>
        </div>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Retail Banking Systems Departmet </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/css/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/css/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/css/vendors/animate.css/animate.min.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/build/css/custom.min.css'); ?>" rel="stylesheet">
  </head>

  <body class="login" style="background-color: #2A3F54;">
    <div >
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper" >
        <div class="animate form login_form"   style="background-color: #fccf4d; padding: 10%; border-radius: 3%; box-shadow: 5px 8px 10px 3px #132f2b; ">
          <section class="login_content" >
            <form method="post" action="<?php echo base_url(); ?>process_improvement/login_validate"> 

<?php
if($this->session->flashdata('item')) {
  $message = $this->session->flashdata('item');
?>
<div class= "<?php echo $message['message']?>;" </div>
<?php 
}

if(isset($_SESSION['username'])) {
     redirect('process_improvement/EmployeeProfile', 'refresh');
     exit; // for good measure
}

?>
      <div style="color: black;">
              <h1>IMS LOG IN</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" id="user" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required />
              </div>
              <div style="margin-left: 25%;">
                <input class="btn btn-default submit" type="submit" value="Log In" name="submit"/>
               
              </div>
        </div>

              <div class="clearfix" ></div>

              <div class=""   style="color: black;">
               <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>-->

                <div class="clearfix">&nbsp;</div>

                <div style="color: black;">
                  <h2><i class="fa fa-bank"></i> &nbsp;Retail Banking Systems Department</h2>
                  <p>©2018 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log In </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>



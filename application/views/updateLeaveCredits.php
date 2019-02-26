<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php echo form_open('process_improvement/updateLC/'.$employeeID); ?>
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Update Employees Leave Credits</h3>
                    <div class="clearfix"></div>

                    <div class="x_content">
                      <br />
                      <div class="col-md-6" style="padding: 10px; text-align: center; margin-left: 250px;">          
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" placeholder=" Employee ID" name="employeeID" value="<?php echo $employeeID?>" id="employeeID">
                              </div>
                          </div>
                          <div>&nbsp;</div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Name</label>
                              <div class="col-md-3 col-sm-9 col-xs-12">
                                <input type="text" class="form-control"  required="required"for="lname" placeholder=" Last Name" name="lname" value="<?php echo $lname ?>" id="lname">
                              </div>
                              <div class="col-md-3 col-sm-9 col-xs-12">
                                <input type="text" class="form-control"  required="required"for="fname" placeholder=" First Name" name="fname" value="<?php echo $fname ?>" id="fname">
                              </div>
                              <div class="col-md-3 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" for="mname" id="inputSuccess2" placeholder="Middle Name" name="mname" value="<?php echo $mname ?>" id="mname">
                              </div>
                          </div>
                          <div>&nbsp;</div>
            
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Vacation Leave</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="number" class="form-control has-feedback-left" required="required" for="vacation" placeholder=" Vacation Leave" name="vacation" value="<?php echo $vacation ?>" id="vacation">
                              </div>
                          </div>
                          <div>&nbsp;</div>  

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sick Leave</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="number" class="form-control has-feedback-left" required="required" for="sick" placeholder=" Sick Leave" name="sick" value="<?php echo $sick ?>" id="sick">
                              </div>
                          </div>
                          <div>&nbsp;</div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Special Leave Privilege</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="number" class="form-control has-feedback-left" required="required" for="slp" placeholder=" Special Leave Privilege" name="slp" value="<?php echo $slp ?>" id="slp">
                              </div>
                          </div>
                          <div>&nbsp;</div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Others</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="number" class="form-control has-feedback-left" required="required" for="others" placeholder=" Others" name="others" value="<?php echo $others ?>" id="others">
                              </div>
                          </div>
                          <div>&nbsp;</div>

                      
  <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                          <button class="btn btn-primary" type="button"><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin/')?>" style="color: white;">Cancel</a></button>
                          <button type="submit" class="btn btn-success" for="inputSuccess2" value="submit">Submit</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
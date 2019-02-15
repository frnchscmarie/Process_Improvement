<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main">
          <div class="">    
            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                     <div class="x_title">
                       <h2>Change Password</h2>
                          <div class="clearfix"></div>
                      </div>
                          <div class="clearfix"></div>
                            <div class="x_content" style="margin-left: 25%;">
                              <?php echo form_open('process_improvement/submit_changepassword'); ?> 
                              <form data-parsley-validate class="form-horizontal form-label-left"  >
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Password: </label>
                                  <div class="col-md-8 col-sm-8 col-xs-12">
                                    <input type="password" class="form-control has-feedback-left" required="required" for="" placeholder="Current Password" name="oldpassword" id="oldpassword" style="width: 50%; margin-left: -20%;">
                                      <div>&nbsp;</div>
                                  </div>
                                </div>
                              

                                 <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password: </label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                      <input type="password" class="form-control has-feedback-left" required="required" for=""  placeholder="Enter new password" name="newpassword" id="newpassword" style="width: 50%; margin-left: -20%;">
                                      <div>&nbsp;</div>
                                    </div>
                                </div>


                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Verify Password: </label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                      <input type="password" class="form-control has-feedback-left" required="required" for=""  placeholder="Re-enter new password" name="confirmpassword" id="confirmpassword" style="width: 50%;  margin-left: -20%;">
                                        <div>&nbsp;</div>
                                    </div>
                                  </div>
                                  <span id='message'></span>
          
                                <div class="form-group">
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                     <div>&nbsp;</div>
                                    <button class="btn btn-primary" type="button" style="margin-left: -8%;"><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin/')?>" style="color: white;">Cancel</a></button>
                                    <button type="submit" class="btn btn-success" for="inputSuccess2" value="submit">Save</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                  </div>
                </div>
             </div>
          </div>
        </div>
      </div>
    </div>
</body>

    
                            

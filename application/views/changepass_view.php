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
                    
<!--input content here--> <div class="x_content">
                             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" style="margin-left: 15%">
                               <div class="form-group">
                                   <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Password: </label>
                                      <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input type="password" class="form-control has-feedback-left" required="required" for="" id="inputSuccess2" placeholder="Current Password" name="old_pass" value="" id="">
                                      </div>
                               </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password: </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                             <input type="password" class="form-control has-feedback-left" required="required" for="" id="inputSuccess2" placeholder="Enter new password" name="new_pass" value="<?php echo set_value('password'); ?>" id="">
                         </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Verify Password: </label>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="password" class="form-control has-feedback-left" required="required" for="" id="inputSuccess2" placeholder="Re-enter new password" name="confirm_pass" value="<?php echo set_value('password'); ?>" id="">
                          </div>
                      </div>


                      
  
                     <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 15%;"><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin/')?>" style="color: white;">Cancel</a></button>
                          <button type="submit" class="btn btn-success" for="inputSuccess2" value="submit">Save</button>
                        </div>
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


 
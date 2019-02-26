<!DOCTYPE html>

<body class="nav-md">

    <div class="container body">
      <div class="main_container">
        
        
<?php echo form_open('process_improvement/updateEmployee/'.$employeeID);?> 
<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>

  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Update Employee</h3>
                    <div class="clearfix"></div>
               </div>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Birthdate</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left" required="required" for="birthday" placeholder=" Birthdate" name="birthday" value="<?php echo $birthday ?>" id="birthday">
                        </div>
                      </div>
                      <div>&nbsp;</div>  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">PG Level</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required"for="pg_level" placeholder=" PG Level" name="pg_level" value="<?php echo $pg_level ?>" id="pg_level">
                        </div>
                      </div>
                      <div>&nbsp;</div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Hired</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left" required="required" for="date_hired"  placeholder="Date Hired" name="date_hired" value="<?php echo $date_hired ?>" id="date_hired">
                        </div>
                      </div>
                     <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required" for="position"  placeholder="Position" name="position" value="<?php echo $position ?>" id="position">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="email" placeholder="Email" name="email" value="<?php echo $email ?>" id="email">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Promotion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control has-feedback-left" required="required" for="promo_date" placeholder="Last Promotion Date" name="promo_date" value="<?php echo $promo_date ?>" id="promo_date">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left"  required="required" for="civil_stat" placeholder="Civil Status" name="civil_stat" value="<?php echo $civil_stat ?>" id="civil_stat">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="cp_no" placeholder="  Contact Number" name="cp_no" value="<?php echo $cp_no ?>" id="cp_no">
                        </div>
                      </div>
      
    
  
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
  </form>
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

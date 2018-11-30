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

                     <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" id="inputSuccess2" placeholder=" Employee ID" name="employeeID" value="<?php echo $employeeID; ?>" id="employeeID" readonly="readonly">
                        <span class="fa fa-id-card-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required"for="employee_name" id="inputSuccess2" placeholder=" Employee Name" name="employee_name" value="<?php echo $employee_name; ?>" id="employee_name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required"for="pg_level" id="inputSuccess2" placeholder=" PG Level" name="pg_level" value="<?php echo $pg_level; ?>" id="pg_level">
                        <span class="fa fa-industry form-control-feedback left" aria-hidden="true"></span>
                      </div>
            
            
                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="birthday" id="inputSuccess2" placeholder=" Birthdate" name="birthday" value="<?php echo $birthday; ?>" id="birthday">
                        <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    
                     <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="date_hired" id="inputSuccess2" placeholder="Date Hired" name="date_hired" value="<?php echo $date_hired; ?>" id="date_hired">
                        <span class="fa fa-id-card-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
            

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required" for="position" id="inputSuccess2" placeholder="Position" name="position" value="<?php echo $position; ?>" id="position">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                       <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="email" id="inputSuccess2" 
                        placeholder="Email" name="email" value="<?php echo $email; ?>" id="email">
                        <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="promo_date" id="inputSuccess2" placeholder="Last Promotion Date" name="promo_date" value="<?php echo $promo_date; ?>" id="promo_date">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left"  required="required" for="civil_stat" id="inputSuccess2" placeholder="Civil Status" name="civil_stat" value="<?php echo $civil_stat; ?>" id="civil_stat">
                        <span class="fa fa-user-circle-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class=" form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" required="required" for="cp_no" id="inputSuccess2" placeholder="  Contact Number" name="cp_no" value="<?php echo $cp_no; ?>" id="cp_no">
                        <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                      </div>
      
    
  
  <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 30%;"><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
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

<!DOCTYPE html>
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
                    <h2>Employee Management</h2>
                    <ul class="nav navbar-right panel_toolbox">
                  
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Employee </a>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Add Employee</h3>
    </div>
    <div class="modal-body">
    <div>&nbsp;</div>
  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/addEmployee'); ?> 
              <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" placeholder=" Employee ID" name="employeeID" value="<?php echo set_value('employeeID')?>" id="employeeID">
                        </div>
                      </div><div>&nbsp;</div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Name</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required"for="lname" placeholder=" Last Name" name="lname" value="<?php echo set_value('lname'); ?>" id="lname">
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required"for="fname" placeholder=" First Name" name="fname" value="<?php echo set_value('fname'); ?>" id="fname">
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control" for="mname" placeholder="Middle Name" name="mname" value="<?php echo set_value('mname'); ?>" id="mname">
                        </div>
                      </div><div>&nbsp;</div>

                      <div class = "form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required"for="username" placeholder="Employee Username" name="username" value="<?php echo set_value('username'); ?>" id="username">
                        </div>

                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Usertype</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select class="form-control" value="<?php echo set_value('type'); ?>" id="type" name="type">
                            <option value="Employee">Employee</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Department Head">Department Head</option>
                            <option value="Admin">Admin</option>
                          </select>
                        </div>
                    </div>
                      <div>&nbsp;</div>
                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">PG Level</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required"for="pg_level" placeholder="PG Level" name="pg_level" value="<?php echo set_value('pg_level'); ?>" id="pg_level">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Birthdate</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left" required="required" for="birthday" placeholder=" Birthdate" name="birthday" value="<?php echo set_value('birthday'); ?>" id="birthday">
                        </div>
                      </div>
                      <div>&nbsp;</div>
            
            
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Hired</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left" required="required" for="date_hired" placeholder="Date Hired" name="date_hired" value="<?php echo set_value('date_hired'); ?>" id="date_hired">
                        </div>
                      </div>
                      <div>&nbsp;</div>
                    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required" for="position" placeholder="Position" name="position" value="<?php echo set_value('position'); ?>" id="position">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" id="email">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Promotion</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control has-feedback-left" required="required" for="promo_date" placeholder="Last Promotion Date" name="promo_date" value="<?php echo set_value('promo_date'); ?>" id="promo_date">
                        </div>
                      </div>
                      <div>&nbsp;</div>
            
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left"  required="required" for="civil_stat" placeholder="Civil Status" name="civil_stat" value="<?php echo set_value('civil_stat'); ?>" id="civil_stat">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="cp_no" placeholder="  Contact Number" name="cp_no" value="<?php echo set_value('cp_no'); ?>" id="cp_no">
                        </div>
                      </div>
                        <div>&nbsp;</div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Supervisor</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                        
                         <select class="form-control" id="supervisorID" name="supervisorID">
                          <option value="">Select Supervisor</option>
                          <?php 
                          foreach($supervisor as $s){
                            echo '<option value="'.$s['id'].'">'.$s['username'].'</option>';
                          }
                          ?>                                 
                        </select>
                      </div>
                    </div>
                      <div>&nbsp;</div>

                      
    <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewEmployeeAdmin')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
      </div>

  
</div>
</div>
</div>
</div>
</form>

  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewEmployeeAdmin'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                      <div class="x_content">
                      <p class="text-muted font-13 m-b-30">
                        Manage all the Employees here.
                      </p>
                      <table id="datatable" class="table table-striped table-bordered col-md-12">
                        <thead>
    
                      <tr id="trHead">
            <th >Employee ID</th>
            <th >Name</th>
            <th >Pg Level</th>
            <th >Birthday</th>
            <th >Date Hired</th>
            <th >Position</th>
            <th >Email</th>
            <th >Date of last promotion</th>
            <th >Civil Status</th>
            <th >Contact Number</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($employee!=null){
                foreach($employee as $c){  
                    echo "<tr><td>".$c['employeeID']."</td><td>".$c['lname'].", ".$c['fname']." ".$c['mname']."</td><td>".$c['pg_level']."</td><td>".$c['birthday']."</td><td>".$c['date_hired']."</td><td>".$c['position']."</td><td>".$c['email']."</td><td>".$c['promo_date']."</td><td>".$c['civil_stat']."</td><td>".$c['cp_no']."</td>".'
                    <td><a href="'.base_url('process_improvement/updateEmployee/'.$c['employeeID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a><a href="'.base_url('process_improvement/delEmployee/'.$c['employeeID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td></tr>';
                    
                }
        }
            ?>
        </tbody>
    </table>
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


 
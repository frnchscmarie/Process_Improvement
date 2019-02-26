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
                      <h2>Training Attended</h2>
                         <ul class="nav navbar-right panel_toolbox">
                          <li  style="background-color: #008080; border-radius: 10px;"><a data-toggle="modal" data-target="#squarespaceModal" class="butt5"  style="color: white; font-weight: bold;><i class="fa fa-plus" style="color: black;"></i> + Add Training </a>
                              <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                          <h3 class="modal-title" id="lineModalLabel">Add Training</h3>
                                    </div>
                                          <div class="modal-body">
                                          <div>&nbsp;</div>
                                            <div class="container">
                                              <?php echo validation_errors(); ?>
  
                                              <?php echo form_open('process_improvement/addTraining'); ?> 
                                                <form class="form-horizontal form-label-left">

                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control has-feedback-left" required="required" for="title" placeholder="Title" name="title" value="<?php echo set_value('title')?>" id="title">
                                                      </div>
                                                  </div>
                                                  <div>&nbsp;</div>

                                                  <label class=" col-md-12 col-sm-12 col-xs-12">INCLUSIVE DATES</label><br>
                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 right">From</label>
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="date" class="form-control has-feedback-left"  required="required"for="inc_from" placeholder=" Inclusive dates" name="inc_from" value="<?php echo set_value('inc_from'); ?>" id="inc_from">
                                                      </div>
                                                  </div>
                                                  <div>&nbsp;</div>

                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">To</label>
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="date" class="form-control has-feedback-left"  required="required"for="inc_to" placeholder="Inclusive dates" name="inc_to" value="<?php echo set_value('inc_to'); ?>" id="inc_to">
                                                      </div>
                                                  </div>
                                                  <div>&nbsp;</div>                  

                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No of Hours</label>
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control has-feedback-left" required="required" for="no_of_hours" placeholder=" No of Hours" name="no_of_hours" value="<?php echo set_value('no_of_hours'); ?>" id="no_of_hours">
                                                      </div>
                                                  </div>
                                                  <div>&nbsp;</div>
            
                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Conducted By</label>
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control has-feedback-left" required="required" for="conducted_by"  placeholder="Conducted By" name="conducted_by" value="<?php echo set_value('conducted_by'); ?>" id="conducted_by">
                                                      </div>
                                                  </div>
                                                  <div>&nbsp;</div>

                                                  <div class="form-group" enctype="multipart/form-data" method= "">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Attachments</label>
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input action="<?php echo base_url('process_improvement/do_upload');?>" method="post" type="file" for="attachments" placeholder="Attachments" name="attachments" value="<?php echo set_value('attachments'); ?>" >
                                                      </div>
                                                  </div>

                      
                                                  <div class="">
                                                    <label class="control-label col-sm-4">&nbsp;</label>
                                                  </div>
  
                                                  <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                      <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewTraining')?>" style="color: white;">Cancel</a></button>
                                                      <button type="submit" class="btn btn-success" value="submit">Submit</button>
                                                    </div>
                                                  </div>
                                                </form>
                                              </div>
                                            </div>
                                </div>
                              </div>
                            </div>
<div class="clearfix"></div>

  <div class="container">
 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                      


                    <div class="clearfix"></div>
                        <div class="x_content" >
                         <?php echo validation_errors(); ?>
  
                          <?php echo form_open('process_improvement/viewTraining'); 
                          ?> 
                            <div class="col-md-12" >
                              <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                  <tr id="trHead">
                                    <th >Employee ID</th>
                                    <th >Employee Name</th>
                                    <th >Title of Seminar/Conference/Workshop/Short Courses<br>(write in full)</th>
                                    <th colspan="2">Inclusive Dates<br><label style="margin-left: 0%;">From</label><label style="margin-left: 30%;">To</label></th>
                                    <th >Number of Hours</th>
                                    <th >Conducted/Sponsored by<br>(Write in full)</th>
                                    <th >Attachments</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                  if($training!=null){
                                    foreach($training as $a){  
                                      echo "<tr><td>".$a['employeeID']."</td><td>".$a['username']."</td><td>".$a['title']."</td><td>".$a['inc_from']."</td><td>".$a['inc_to']."</td><td>".$a['no_of_hours']."</td><td>".$a['conducted_by']."</td><td>".$a['attachments']."</td>".'</tr>';
                                    }
                                  }
                                ?>  
                                </tbody>
                              </table>
                            </div>
                        </div>
                      
       
    </table>
    </div>
  </div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

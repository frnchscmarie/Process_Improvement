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
                    <h2>Leave Management</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Leave </a>
<!--MODAL-->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"><div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">LEAVE APPLICATION</h3>
    </div>
    <div class="modal-body">
     <div>&nbsp;</div>
        <div class="container">
        <?php echo validation_errors(); ?>
        <?php echo form_open('process_improvement/viewLeave'); 
        ?> 
              <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Filing</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo('date'); ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Leave</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select class="form-control" value="<?php echo set_value('type'); ?>" onchange="showradiobutton()" id="type">
                            <option value="Vacation Leave(Local)">Vacation Leave (Local)</option>
                            <option value="Vacation Leave(International)">Vacation Leave (International)</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Special Leave Priveledge">Special Leave Privelege</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                    </div>
                      <div>&nbsp;</div>


                        <!--hidden forms-->
                        <div class="form-group" style="display: none;" id="vl_int">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Please specify  </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="" name="" value="<?php echo set_value('type_info'); ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="Indicate Place of Leave (International)">
                        </div>
                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="radio" style="display: none;" id="sick_leave">
                            <label>
                              <input type="radio" checked="" value="<?php echo set_value('type_info'); ?>" id="optionsRadios1" name="optionsRadios"> In hospital
                            </label>
                             <label>
                              <input type="radio" checked="" value="<?php echo set_value('type_info'); ?>" id="optionsRadios1" name="optionsRadios"> Out Patient
                            </label>
                          </div>
                        </div>
                     <div>&nbsp;</div>

                      <div class="form-group" style="display: none;" id="special_leave_priveledge">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Please specify </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="" name="" value="<?php echo set_value('type_info'); ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="Indicate type of SLP">
                        </div>
                      </div>

                      <div class="form-group" style="display: none;" id="others">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Please specify  </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="" name="" value="<?php echo set_value('type_info'); ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="Indicate Reason/s for leave">
                        </div>
                      </div>
                    


                   <!--   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Where will leave be spent</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="place" name="place" value="<?php echo set_value('place'); ?>"required="required" class="form-control col-md-7 col-xs-12" placeholder="Indicate Place">
                        </div>
                      </div>
                      <div>&nbsp;</div>-->


                      <label class=" col-md-12 col-sm-12 col-xs-12">INCLUSIVE DATES</label><br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >FROM</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" id="" name="" for="recommendation" required="required" class="form-control col-md-7 col-xs-12 center" value="<?php echo set_value('inc_from'); ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">TO</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" id="" name="" for="" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('inc_to'); ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. of working days applied for</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" for="no_of_days" name="no_of_days" id="no_of_days" required="required" placeholder=" Input no. of working days" class="form-control col-md-5 col-sm-2 col-xs-4" value="<?php echo set_value('no_of_days'); ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <label class=" col-md-12 col-sm-12 col-xs-12">DETAILS OF ACTION PLAN </label><br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Recommendations </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="recommendation" name="recommendation" for="recommendation" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('recommendation'); ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">AM,DC/SUPERVISOR</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="supervisor" name="supervisor" for="supervisor" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('supervisorID') ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>

 <div class=""><label class="control-label col-sm-4">&nbsp;</label></div>
  
           <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                 <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewLeave')?>" style="color: white;">Cancel</a></button>
                                  
                  <button type="submit" class="btn btn-success" value="submit">Submit</button>
              </div>
           </div>
</form>
</div>
</div>
</div>
</div>
</div>


<!--/MODAL-->




<div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewLeave'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>

</div>

<!--first panel (TABLE) -->                      
<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" >
                <div class="x_panel">
                  <div class="">
                    <h4>LIST OF EMPLOYEE'S LEAVE</h4>
                  </div>
<!--xcontent--> <div class="x_content" >
                    <br />
                    <table id="datatable" class="table table-striped table-bordered" >
                      <thead>
                        <tr id="trHead">
                          <th >Date Filled</th>
                          <th >Place</th>
                          <th >Type of Leave</th>
                          <th >Leave Information</th>
                          <th >No. of Days</th>
                          <th colspan="2">Inclusive Dates</th>
                          <th >Approver</th>
                          <th >Status</th>
                        </tr>
                      </thead>

                      <tbody>
                       <?php
                        if($leavedb!=null){
                          foreach($leavedb as $l){
                            echo "<tr><td>".$l['date_of_filing']."</td><td>".$l['place']."</td><td>".$l['type']."</td><td>".$l['type_info']."</td><td>".$l['no_of_days']."</td><td>".$l['inc_from']."</td><td>".$l['inc_to']."</td><td>".$l['supervisor']."</td><td>".$l['status']."</td>".'</tr>';
                          }
                                }
                                ?>
                      </tbody>
                     </table>
              <button style="margin-top: -10px; margin-left: 50%;" class="print"><i class="fa fa-print"></i> Print</button>

    </div><!--/xcontent-->
  </div><!--/panel-->



<!-- Second panel (leave count)-->
    <!--  <div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                      <div class="x_panel">
                        <div class="x_content" style="margin-left:;">
                               <label class="text-danger font-20 m-b-40">Availed Leaves</label>
                          <br />
                            <div style="margin-right: 15%;">
                               <label class="control-label col-md-2 col-sm-2 col-xs-12">SLV</label>
                              <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                              <label class="control-label col-md-2 col-sm-2 col-xs-12" style="margin-left: -8%;">VL</label>
                              <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                              <label class="control-label col-md-2 col-sm-2 col-xs-12" style="margin-left: -8%;">FML</label>
                              <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                              <label class="control-label col-md-2 col-sm-2 col-xs-12" style="margin-left: -8%;">SL</label>
                              <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                            </div>

                            <div style="margin-top: 4%;">
                            <form class="form-horizontal form-label-left">
                            <div class="form-group">
                              <label class="control-label col-xs-3 col-sm-3 col-xs-12" > From</label>
                              <div class="col-md-2 col-sm-2 col-xs-12" style="margin-left: -20%;">
                                <input class="form-control col-md-3 col-sm-3 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo date('Y-m-d'); ?>" >
                              </div>
                              <label class="control-label col-xs-3 col-sm-3 col-xs-12" > To</label>
                              <div class="col-md-2 col-sm-2 col-xs-12" style="margin-left: -20%;">
                                <input class="form-control col-md-3 col-sm-3 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo date('Y-m-d'); ?>" >
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
      </div>
<!--/Second Panel (leave count)-->
            
     
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
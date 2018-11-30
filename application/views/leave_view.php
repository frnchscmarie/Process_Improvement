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
                    <h2>Application For Leave</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Leave </a>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">LEAVE APPLICATION</h3>
    </div>
    <div class="modal-body">
    <div>&nbsp;</div>
  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/addEmployee'); 
  ?> 
              <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Filing</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo date('Y-m-d'); ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Leave</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select class="form-control" value="<?php echo set_value('type'); ?>">
                            <option value="Vacation Leave(Local)">Vacation Leave (Local)</option>
                            <option value="Vacation Leave(Interational)">Vacation Leave (International)</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Special Leave Priveledge">Special Leave Priveledge</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Where will leave be spent</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="place" name="place" value="<?php echo set_value('place'); ?>"required="required" class="form-control col-md-7 col-xs-12" placeholder="Indicate Place">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Inclusive Dates</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <form class="form-horizontal">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="01/01/2018 - 01/25/2018" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
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

                      <label class=" col-md-12 col-sm-12 col-xs-12">DETAILS OF ACTION PLAN </label>
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
                         <input type="text" id="supervisor" name="supervisor" for="supervisor" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('supervisor'); ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      
                      
    <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewLeave')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
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
                                     <!--   <ul class="nav navbar-right panel_toolbox">
                        <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Leave Application </a>
                           <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><h3 class="modal-title" id="lineModalLabel">Leave Application Form</h3>
                                    </div>

                 <div class="modal-body">
                  <div>&nbsp;</div>

                    <div class="container">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('process_improvement/viewLeave');?> 

                           
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Date of Filing :</label>
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo date('Y-m-d'); ?>" />
                        </div>
                        <div>&nbsp;</div>
                     
                      <div class="form-group col">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Leave :</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" value="<?php echo set_value('type'); ?>">
                            <option value="Vacation Leave(Local)">Vacation Leave (Local)</option>
                            <option value="Vacation Leave(Interational)">Vacation Leave (International)</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Special Leave Priveledge">Special Leave Priveledge</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div>&nbsp;</div><br />

                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="">Where will leave be spent?:</label>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="place" name="place" value="<?php echo set_value('place'); ?>"required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>

                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="">Inclusive Date/s:</label>
                         <div class="col-md-4">
                        Date Range Picker
                        <form class="form-horizontal">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="01/01/2018 - 01/25/2018" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                          <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="date" id="inc_dates" name="inc_dates" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('inc_dates'); ?>">
                            <script type="text/javascript">
                            $('.daterange').daterangepicker();
                          </script>
                          </div>
                          <div>&nbsp;</div><br>

                         <label class="control-label col-md-5 col-sm-5 col-xs-6" >No. of Working Days Applied For: </label>
                         <input type="text" for="no_of_days" name="no_of_days" id="no_of_days" required="required" class="form-control col-md-5 col-sm-2 col-xs-4" value="<?php echo set_value('no_of_days'); ?>">
                        <div>&nbsp;</div>

                      <label for="">DETAILS OF ACTION APPLICATION</label><br>
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Recommendations: </span></label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="recommendation" name="recommendation" for="recommendation" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('recommendation'); ?>">
                          </div>
                      <div>&nbsp;</div><br>

                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">ADM,DC/SUPERVISOR: </span></label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="supervisor" name="supervisor" for="supervisor" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('supervisor'); ?>">
                          </div>
                      <div>&nbsp;</div>

                  
              
                            <!--
                                            <div class="">
                                              <label class="control-label col-sm-4">&nbsp;</label>
                                            </div>
  
                           <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewLeave')?>" style="color: white;">Cancel</a></button>
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
      </div>
    
                                        </div>
  
                                  </div>
                          
                    </form>
                  </div>
                </div>


  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewLeave'); 
  ?> 
                       
            </li>
                    </ul>-->
                    <div class="clearfix"></div>
    </div>
 <!--first panel-->                      
<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                <div class="x_panel">
                  <div class="">
                    <h4>LIST OF EMPLOYEE'S LEAVE</h4>
                  </div>
                  <div class="x_content" >

                    <br />
  <!--table start-->
                    <table id="datatable" class="table table-striped table-bordered" >
                      <thead>
  
                    <tr id="trHead">
            <th >Date Filled</th>
            <th >Place</th>
            <th >Type of Leave</th>
            <th >No. of Days</th>
            <th >Inclusive Dates</th>
            <th >Approver</th>
            <th >Status</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($leavedb!=null){
          foreach($leavedb as $l){
            echo "<tr><td>".$l['date_of_filing']."</td><td>".$l['place']."</td><td>".$l['type']."</td><td>".$l['no_of_days']."</td><td>".$l['inc_dates']."</td><td>".$l['supervisor']."</td><td>".$l['status']."</td>".'</tr>';
          }
                }
                ?>
        </tbody>
    </table>
              <button style="margin-top: -10px; margin-left: 50%;"><i class="fa fa-print"></i> Print</button>

    </div>
  </div>
</div>

  <div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
                <div class="x_panel">
                  <div class="x_content" style="margin-left: 10%;">
                         <label class="text-danger font-20 m-b-40">Availed Leaves</label>
                    <br />
                   

          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left col-md-5 col-sm-5 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">From</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">To</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="Default Input">
                        </div>
                      </div>  

                       <div style="margin-left: 55%;">
                            <button class="btn btn-default" type="reset">Search</button>
                        </div>              
          </form>

                       
                                            


           
                        <div style="margin-right: 15%; ">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">SLV</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>

                        <div class="">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">VL</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                      </div>
                      </div>

                      <div style="margin-right: 15%;">
                         <label class="control-label col-md-2 col-sm-2 col-xs-12">FML</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">SL</label>
                        <label class="control-label col-sm-2 col-xs-2" style="margin-left: -10%;">1</label>
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

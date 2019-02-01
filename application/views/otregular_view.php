<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Overtime List</h2>
                      <ul class="nav navbar-right panel_toolbox">
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Overtime </a>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">OVERTIME APPLICATION</h3>
    </div>
    <div class="modal-body">
    <div>&nbsp;</div>
  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/addOT'); 
  ?> 
              <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo date('Y-m-d'); ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Authorized OT Time</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="auto_OT" name="auto_OT" value="<?php echo set_value('auto_OT'); ?>"required="required" class="form-control col-md-7 col-xs-12" placeholder="Authorized Time">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">OT RATE</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="rate" name="rate" value="<?php echo set_value('rate'); ?>"required="required" class="form-control col-md-7 col-xs-12" placeholder="RATE">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <label class=" col-md-12 col-sm-12 col-xs-12">ACTUAL OT TIME </label>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Start</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="time" name="aot_from" id="aot_from" required="required" value="<?php echo set_value('aot_from') ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Finish</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="time" name="aot_to" id="aot_to" required="required" value="<?php echo set_value('aot_to') ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hour</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="number" name="hours" id="hours" required="required" value="<?php echo set_value('hours') ?>" >
                         
                        </div>
                      </div>
                      <div>&nbsp;</div>
                      
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Minute</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="number" for="minutes" name="minutes" id="minutes" required="required" placeholder=" Minutes" class="form-control col-md-5 col-sm-2 col-xs-4" value="<?php echo set_value('minutes'); ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tasks to be Accomplished</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="text" name="task" id="task" required="required" value="<?php echo set_value('task'); ?>" placeholder="Input task/s" >
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
  
  <?php echo form_open('process_improvement/viewOvertimeRegular'); 
  ?> 
           
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                <div class="x_content">
                   
                   <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th rowspan="3">Date</th>          
                            <th rowspan="3">Authorized OT Time</th>
                            <th colspan="2">Actual OT Time</th>
                            <th colspan="4">OT Rate</th>
                            <th rowspan="3">Tasks to be Accomplished /<br>Actual Accomplishments<br>(Please attach additional sheet of necessary)</th>
                          </tr>

                          <tr id="trHead">
                            <th rowspan="2">Start</th>          
                            <th rowspan="2">Finish</th>
                            <th colspan="2">1.25</th>
                            <th colspan="2">1.50</th>
                          </tr>

                           <tr id="trHead">
                            <th >Hour</th>          
                            <th >Minute</th>
                            <th >Hour</th>          
                            <th >Minute</th>
                          </tr>


                      </thead>


                       <tbody>
                       <?php
                       if($play!=null){
                         foreach($play as $o){  
                          echo "<tr><td>".$o['date_of_filing']."</td><td>".$o['auto_OT']."</td><td>".$o['aot_from']."</td><td>".$o['aot_to']."</td><td>".$o['rate']."</td><td>".$o['hours']."</td><td>".$o['minutes']."</td><td>".$o['task']."</td>".'</tr>';
                    
                          }
                        }else{
                          echo 'walang laman';
                        }
            ?>
          
                      </tbody>
                     </table>


     <div class="col-md-6" style="padding: 10px; text-align: center;">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12">AUTHORIZED BY: </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                      </div>
                  </div>

                     </form>
  </div>

              <div style="float: right; margin-top: 10px;">
                <button type="submit" class="btn btn-success" value="submit">Submit</button>
                <button type="submit" class="btn btn-success" value="submit">Clear</button>
              </div>
 </div>

 <!--start of overtime history-->
</div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Overtime History</h4>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width: 60%; margin-left: 200px;">
                <thead>
  
                    <tr id="trHead">
                      <th >Date</th>
                      <th >Status</th>
                      <th >Remarks</th>
                      <th >Action</th>
                     </tr>
               </thead>

        <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View</a><a href="" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a></td>
        </tr>
        </tbody>
    </table>
                    
     
</div>
</div>





 
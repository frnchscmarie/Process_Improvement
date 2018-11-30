<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Overtime List</h2>
                       <ul class="nav navbar-right panel_toolbox">
                        <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Overtime Application </a>
                           <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><h3 class="modal-title" id="lineModalLabel">Add Overtime Application</h3>
                                    </div>

                                  <div class="modal-body">
                                      <div>&nbsp;</div>
                                        <div class="container">
                                          <?php echo validation_errors(); ?>
                                          <?php echo form_open('process_improvement/addEmployee');?> 

                 <form id="demo-form" data-parsley-validate>
                      <label for="fullname">Date Filed :</label>
                      <input type="date" id="fullname" class="form-control" name="fullname" required />
                      <div>&nbsp;</div>
                     
                        <label for="email">AUTHORIZED OT TIME</label><br>
                      
                       <div class="form-group">
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">FROM</span>
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>

                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">TO</span>
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>

                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">OT RATE</span>
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div>&nbsp;</div>
                        <label for="email">ACTUAL OT TIME</label><br>
                      
                       <div class="form-group">
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">Start</span>
                          </label>
                          <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>

                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">Finish</span>
                          </label>
                          <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="date" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                          <div>&nbsp;</div>
                         <div class="form-group">
                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">Hour</span>
                          </label>
                          <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="time" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>

                          <label class="control-label col-md-1 col-sm-1 col-xs-12" for="">Minute</span>
                          </label>
                          <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="time" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                         <div>&nbsp;</div>
                        <label for="fullname">Tasks to be accomplished :</label>
                      <input type="text" id="fullname" class="form-control" name="fullname" required />
                  </form>

                            <!--for spacing only-->
                                            <div class="">
                                              <label class="control-label col-sm-4">&nbsp;</label>
                                            </div>
  
                            <!--for buttons--><div class="form-group">
                                               <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button class="btn btn-success" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('')?>" style="color: white;">Add</a></button>
                                                <button type="submit" class="btn btn-success" value="submit">Cancel</button>

                                               </div>
                                            </div>
    
                                        </div>
  
                                  </div>
                            </div>
                        </div>
                    </div>
<!--end of modal-->

  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewEmployeeAdmin'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
    </div>
                <div class="x_content">
                   
                   <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                          <tr id="trHead">
                            <th rowspan="3">Date of Filing</th>          
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
          
                         <tr>
                          <td>11/15/2018</td>
                          <td>15-037-044</td>
                          <td>Franchesca Marie Cortez</td>
                          <td>Vacation Leave</td>
                          <td>7</td>
                          <td>00</td>
                          <td>00</td>
                          <td>00</td>
                          <td>Sample Tasks</td>
                        </tr>
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
                      <th >Date of Filing</th>
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





 
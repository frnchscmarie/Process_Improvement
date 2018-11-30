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
                        <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Training </a>
                           <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><h3 class="modal-title" id="lineModalLabel">Add Training</h3>
                                    </div>

                                  <div class="modal-body">
                                      <div>&nbsp;</div>
                                        <div class="container">
                                          <?php echo validation_errors(); ?>
                                          <?php echo form_open('process_improvement/addEmployee');?> 

                 <form id="demo-form" data-parsley-validate>
                      <label for="fullname">Title of Seminar/Workshop/Conference/Short Course (Write in full) :</label>
                      <input type="text" id="fullname" class="form-control" name="fullname" required />
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. of Hours</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="place" name="place" value="<?php echo set_value('place'); ?>"required="required" class="form-control col-md-7 col-xs-12" placeholder="hour">
                        </div>
                      </div>
                      <div>&nbsp;</div>
                      
                      <!-- <div class="form-group">
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

                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="">NO. OF HOURS</span>
                          </label>
                          <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div>&nbsp;</div>-->

                      <label for="sponsor">Conducted/Sponsored By :</label>
                      <input type="text" id="" class="form-control" name="" required />
                  </form>

                            <!--for spacing only-->
                                            <div class="">
                                              <label class="control-label col-sm-4">&nbsp;</label>
                                            </div>
  
                            <!--for buttons--><div class="form-group">
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
                   
                    <div class="x_content" >
                    <div>&nbsp;</div>

            <!--content-->
            <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                  <thead>
  
                    <tr id="trHead">
                      <th rowspan="2">Title</th>
                      <th colspan="2">Inclusive Dates of Attendance (mm/dd/yyy)<br>
                        <label style="margin-left: 20%;">FROM</label>
                        <label style="margin-left: 40%;">TO</label>
                      </th>
                      <th rowspan="2">No. of Hours</th>
                      <th rowspan="2">Conducted/Sponsored By:</th>
                      <th rowspan="2">ATTACHMENTS</th>
                    </tr>

                    
                  </thead>
        <tbody>
            <tr>
                          <td>Coding Seminar</td>
                          <td>06/18/2018</td>
                          <td>06/19/2018</td>
                          <td>16</td>
                          <td>IBM Philippines</td>
                          <td>
                            <a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> EDIT </a> 
                            <a href="" class="btn btn-success btn-xs"><i class="fa fa-trash"></i> DELETE </a>
                          </td>
                        </tr>
        </tbody>
    </table>

     <div style="float: right;"> 
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a>
                  </div>
                          </div>

</body>

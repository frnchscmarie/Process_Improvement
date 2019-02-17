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
        <?php echo form_open('process_improvement/addLeave');?> 
              <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Filing</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                      
                       <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="" value="<?php echo date('Y-m-d'); ?>" readonly>
                      </div>
                    </div>
                      <div>&nbsp;</div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Leave</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select name="type" class="form-control" value="<?php echo set_value('type'); ?>" onchange="showradiobutton()" id="type">
                            <option value="Vacation Leave(Local)">Vacation Leave (Local)</option>
                            <option value="Vacation Leave(International)">Vacation Leave (International)</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Special Leave Priveledge">Special Leave Privilege</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                    </div>
                      <div>&nbsp;</div>


                        <!--hidden forms-->
                        
                  <div class="form-group" style="display: none;" id="vl_int">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Please specify  </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="desc_1" name="desc_1" class="form-control col-md-7 col-xs-12" placeholder="Indicate Place of Leave (International)">
                        </div>
                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="radio" style="display: none;" id="sick_leave">
                            <label>
                              <input type="radio" id="desc_2" name="desc_2" value="In hospital"> In hospital
                            </label>
                             <label>
                              <input type="radio" id="desc_2" name="desc_2" value="Out Patient"> Out Patient
                            </label>
                          </div>
                        </div>
                     <div>&nbsp;</div>


                     <div class="form-group" style="display: none;" id="sick_leave_specify">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Please specify </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="desc_3" name="desc_3" class="form-control col-md-7 col-xs-12" placeholder="Indicate reason/s for sick leave">
                        </div>
                      </div>


                      <div class="form-group" style="display: none;" id="others">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Please specify  </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="desc_4" name="desc_4" value="<?php echo set_value('type_info'); ?>"  class="form-control col-md-7 col-xs-12" placeholder="Indicate Reason/s for leave">
                        </div>
                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="radio" style="display: none;" id="special">
                            <label>
                              <input type="radio" id="desc_5" name="desc_5" value="Birthday">Birthday
                            </label>
                             <label>
                              <input type="radio" id="desc_5" name="desc_5" value="Maternity">Maternity
                            </label>
                             <label>
                              <input type="radio" id="desc_5" name="desc_5" value="Paternity">Paternity
                            </label>
                          </div>
                        </div>
                     <div>&nbsp;</div>
  
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
                         <input type="date" id="inc_from" name="inc_from" for="recommendation" required="required" class="form-control col-md-7 col-xs-12 center" value="<?php echo set_value('inc_from'); ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">TO</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" id="inc_to" name="inc_to" for="inc_to" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('inc_to'); ?>">
                        </div>
                      </div>
                      <div>&nbsp;</div>


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. of working days applied for</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" for="no_of_days" name="no_of_days" id="no_of_days" required="required" placeholder=" No. of working days" class="form-control col-md-5 col-sm-2 col-xs-4" value="<?php echo set_value('no_of_days'); ?>" readonly >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <label class=" col-md-12 col-sm-12 col-xs-12">DETAILS OF ACTION PLAN </label><br>
                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Recommendations </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="recommendation" name="recommendation" for="recommendation" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('recommendation'); ?>">
                        </div>
                      </div> -->
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">AM,DC/SUPERVISOR</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="supervisor" name="supervisorID" for="supervisor" required="required" class="form-control col-md-7 col-xs-12" value="<?php 
                         foreach($supervisor as $super){
                          echo $super['sv_lastname'].","." ".$super['sv_firstname'];
                         }

                          ?>" readonly>
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
                          <th >Type of Leave</th>
                          <th >Leave Information</th>
                          <th >No. of Days</th>
                          <th colspan="2">Inclusive Dates</th>
                          <th >Approver</th>
                          <th >Status</th>
                          <th >ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                       <?php
                        if($leavedb!=null){
                          foreach($leavedb as $l){
                            echo "<tr><td>".$l['date_of_filing']."</td><td>".$l['type']."</td><td>".$l['type_info']."</td><td>".$l['no_of_days']."</td><td>".$l['inc_from']."</td><td>".$l['inc_to']."</td><td>".$l['supervisorID']."</td><td>".$l['status']."</td>".'<td><a href="'.base_url('process_improvement/printleave').'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></td></tr>';
                          }
                                }
                                ?>
                      </tbody>
                     </table>
              <button style="margin-top: -10px; margin-left: 50%;" class="print"><i class="fa fa-print"></i> Print</button>

    </div><!--/xcontent-->
  </div><!--/panel-->



<!-- Second panel (leave count)-->
    <div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" ">
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


<script type="text/javascript">
  
  function showradiobutton()
{
  var select_status=$('#type').val();
  if (select_status == 'Vacation Leave(International)')
   {
    $('#vl_int').show();
   } 
   else {
    $('#vl_int').hide();
  }

  if(select_status == 'Sick Leave')
  {
  $('#sick_leave').show();
  $('#sick_leave_specify').show();
  }
  else{
  $('#sick_leave').hide();
  $('#sick_leave_specify').hide();
  }

  if (select_status == 'Others')
   {
    $('#others').show();
   } 
   else {
    $('#others').hide();
  }

  if(select_status == 'Special Leave Priveledge'){
    $('#special').show();
  }else{
    $('#special').hide(); 
  }

}

$(document).ready(function(){
  $( "#squarespaceModal" ).on('shown.bs.modal', function (e){
          $("#inc_from").change(function(){
            var difference;
            var datefrom = new Date(document.getElementById("inc_from").value);
            var dateday = datefrom.getDate();
            var fromend = datefrom.getDay();

            alert(fromend);
            var currentdate = new Date(document.getElementById("date_of_filing").value);
            var currentday = currentdate.getDate();

            if(dateday>currentday){
             var dif = dateday - currentday; 
            }

            $("#inc_to").change(function(){
              var dateto = new Date(document.getElementById("inc_to").value);
              var todate = dateto.getDate();

              if(todate>dateday){
               difference = todate - dateday;
               $('#no_of_days').val(difference);
                if(dif > 4){
                $(":submit").attr("disabled", false);
                }else{
                  $(":submit").attr("disabled", true);
                }               
              }else{
                $('#no_of_days').val("Date is not valid");
                $(":submit").attr("disabled", true);
              }
              
            }); 



            if(dif > 4){
            $(":submit").attr("disabled", false);
            }else{
              $(":submit").attr("disabled", true);
            }
            
          });
      });
    })
</script>
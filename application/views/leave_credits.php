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
                    <h2>Leave Credit Management</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <li  style="background-color: #008080; border-radius: 10px;"><a data-toggle="modal" data-target="#squarespaceModal2" class="butt5"  style="color: white; font-weight: bold;><i class="fa fa-plus" style="color: black;"></i> + Add Leave Credits </a>
<!--MODAL-->
<div class="modal fade" id="squarespaceModal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Add Leave Credits</h3>
    </div>

    <div class="modal-body">
     <div>&nbsp;</div>
        <div class="container">
       <?php echo validation_errors(); ?>
      <?php echo form_open('process_improvement/addLeaveCredits'); ?> 
              <form class="form-horizontal form-label-left">
                                        
                                              <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID </label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                      <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" placeholder=" Employee ID" name="employeeID" value="<?php echo set_value('employeeID')?>" id="employeeID">
                                                    </div>
                                              </div>
                                              <div>&nbsp;</div>

                                              <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Name</label>
                                                  <div class="col-md-3 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" value="<?php echo set_value('lname'); ?>"  required="required" for="lname" placeholder="Last Name" name="lname"  id="lname" readonly>
                                              </div>
                                            
                                              <div class="col-md-3 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control"  required="required"for="fname" placeholder=" First Name" name="fname" id="fname" readonly>
                                                </div>
                              
                                              <div class="col-md-3 col-sm-9 col-xs-12">
                                                  <input type="text" class="form-control" for="mname" placeholder="Middle Name" name="mname"  id="mname" readonly >
                                              </div>
                                            </div>
                                            <div>&nbsp;</div>

                                              <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">VACATION LEAVE</label>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="number" class="form-control has-feedback-left"  required="required"for="vacation" placeholder="Vacation Leave" name="vacation" value="<?php echo set_value('vacation'); ?>" id="vacation" min = 0 step=".01">
                                                  </div>
                                              </div>
                                              <div>&nbsp;</div>

                                              <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">SICK LEAVE</label>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="number" class="form-control has-feedback-left" required="required" for="sick" placeholder=" Sick Leave" name="sick" value="<?php echo set_value('sick'); ?>" id="sick" min = 0 step=".01">
                                                  </div>
                                              </div>
                                              <div>&nbsp;</div>
            
                                              <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">SPECIAL LEAVE PRIVILEGE </label>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="number" class="form-control has-feedback-left" required="required" for="slp" placeholder="Special Leave Privilege" name="slp" value="<?php echo set_value('slp'); ?>" id="slp" min = 0 step=".01">
                                                  </div>
                                              </div>
                                              <div>&nbsp;</div>

                                              <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">OTHERS</label>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="number" class="form-control has-feedback-left" required="required" for="others" placeholder="Others" name="others" value="<?php echo set_value('others'); ?>" id="others" min = 0 step=".01">
                                                  </div>
                                              </div>
                                              <div>&nbsp;</div>
  
                                        <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button" style="margin-left: 80px;"><a href="<?php echo base_url('process_improvement/viewLeaveCredits')?>" style="color: white;">Cancel</a></button>
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
  <?php echo form_open('process_improvement/viewLeaveCredits'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>

</div>

                
<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" >
              
                  <div class="">
                    <h4>LIST OF LEAVE CREDITS PER EMPLOYEES</h4>
                  </div>
                 <div class="x_content" >
                    <br />
                     <table id="datatable" class="table table-striped table-bordered col-md-12">
                      
                        <thead>
    
                      <tr id="trHead">
            <th >Employee ID</th>
            <th >Name</th>
            <th >Vacation Leave</th>
            <th >Sick Leave</th>
            <th >Special Leave Privilege</th>
            <th >Others</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
              if($leavecredit!=null){
                foreach($leavecredit as $l){  
                    echo "<tr><td>".$l['employeeID']."</td><td>".$l['lname'].", ".$l['fname']." ".$l['mname']."</td><td>".$l['vacation']."</td><td>".$l['sick']."</td><td>".$l['slp']."</td><td>".$l['others']."</td>".'
                    <td><a href="'.base_url('process_improvement/updateLC/'.$l['employeeID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a><a href="'.base_url('process_improvement/delLC/'.$l['employeeID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td></tr>';
                    
                }
        }
            ?>
        </tbody>
    </table>
    </div>
  </div>

</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#squarespaceModal2").on('shown.bs.modal', function(e){
        $(window).load(function() { 
          $.ajax({
                  method:'POST',
                  url:"base_url('fetchemployee')",
                  success:function(data){ 
                  },
                  error: function (error) {
                      alert("Failed to load.. Kindly try again!!");
                  }
           });
      });
    });
  })


//base_url('fetchemployee')
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $("#employeeID").change(function(){
      var employeeID = $(this).val();
      if(employeeID == '')
        {
          $('#lname').prop('disabled', true);
          $('#fname').prop('disabled', true);
          $('#mname').prop('disabled', true);
        }
      else
        {

          var empID = new Array();
            $.ajax({
              url:"<?php echo base_url() ?>process_improvement/getemployeename",
              type: "POST",
              data: {'employeeID' : employeeID},
              dataType: 'json',
                success: function(data){
                  $('#lname').val(data['lname']);
                  $('#fname').val(data['fname']);
                  $('#mname').val(data['mname']);
                  $(":submit").attr("disabled", false);
                },
                error: function(){
                  alert('Employee ID is not valid');
                  $('#lname').val("NO DATA");
                  $('#fname').val("NO DATA");
                  $('#mname').val("NO DATA");
                  $(":submit").attr("disabled", true);
                }
            });
        }
    });

  })
</script>
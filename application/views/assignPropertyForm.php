<?php 
foreach($getted as $get){

}

?>

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
                      <h3>Assign Property</h3>
                        <div class="clearfix"></div>
                    </div>
                        <div class="x_content">
                        <br />
                         <?php echo form_open('process_improvement/addpropertydetails/'); ?>  
                          <div class="col-md-7" style="margin-top: -3%;padding: px; text-align: center; margin-left: 18%;"> 
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <?php echo ('<img align= "center" style="margin-left: 18%;"src="'.base_url('/assets/qrcode/').$property_no.'.png" />'); ?>


                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property No</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="property_no" placeholder="Property" name="property_no" value="<?php echo $property_no ?>" id="property_no" readonly/>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" placeholder=" Employee ID" name="employeeID" value="<?php echo set_value('employeeID')?>" id="employeeID">
                        </div>
                      </div> 
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Name</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required" for="lname" placeholder= "Last Name" name="lname" value="<?php echo set_value('lname'); ?>" id="lname" readonly>
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required"for="fname" placeholder= "First Name" name="fname" value="<?php echo set_value('fname'); ?>" id="fname" readonly>
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control" for="mname" placeholder= "Middle Name" name="mname" value="<?php echo set_value('mname'); ?>" id="mname" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Assigned</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="date_assigned" placeholder=" Date Assigned" name="date_assigned" value="<?php echo $get['date_assigned']; ?>" id="date_assigned" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <input type="text" class="form-control" required="required" for="qty" placeholder=" Quantity" name="qty" 
                         value="<?php echo $get['qty']; ?>" id="qty" readonly>
                        </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Unit </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <input type="text" class="form-control " required="required" for="unit" placeholder="Unit" name="unit" 
                         value="<?php echo $get['unit']; ?>" id="unit" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>
            

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required" for="property_name" placeholder="Property Name" name="property_name" value="<?php echo $get['property_name']; ?>" id="property_name" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="description"  placeholder="Description" name="description" value="<?php echo $get['description']; ?>" id="description" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Purchased</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control has-feedback-left" required="required" for="date_purchased"  placeholder="Date Purchased" name="date_purchased" value="<?php echo $get['date_purchased']; ?>" id="date_purchased" readonly>
                        </div>
                      </div> 
                     <div>&nbsp;</div>
   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Classification No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="classification_no"  placeholder="  Classification Number" name="classification_no" value="<?php echo $get['classification_no']; ?>" id="classification_no" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Value</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="number" class="form-control " required="required" for="unit_value"  placeholder="  Unit Value" name="unit_value" value="<?php echo $get['unit_value']; ?>" id="unit_value" readonly>
                            </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Total Value</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="number" class="form-control " required="required" for="total_value"  placeholder="  Total Value" name="total_value" value="<?php echo $get['total_value']; ?>" id="total_value" readonly>
                        </div>
                        
                      </div>
                           <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">MR Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="mr_no"  placeholder="  MR Number" name="mr_no" value="<?php echo $get['mr_no']; ?>" id="mr_no" readonly>
                        </div>
                      </div> 
                    </form>            
                    <div class="">
                      <label class="control-label col-sm-4">&nbsp;</label>
                    </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewProperties')?>" style="color: white;">Cancel</a></button>
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
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
    </div>
</body>



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
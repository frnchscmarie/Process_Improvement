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
                      <h3>Edit Details Property</h3>
                        <div class="clearfix"></div>
                    </div>
                        <div class="x_content">
                        <br />

                      <?php echo form_open('process_improvement/addpropertyinfo/'); ?>  
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Assigned</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="date_assigned" placeholder=" Date Assigned" name="date_assigned" value="<?php echo set_value('date_assigned'); ?>" id="date_assigned">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <input type="text" class="form-control" required="required" for="qty" placeholder=" Quantity" name="qty" value="<?php echo set_value('qty'); ?>" id="qty">
                        </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Unit </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <input type="text" class="form-control " required="required" for="unit" placeholder="Unit" name="unit" value="<?php echo set_value('unit'); ?>" id="unit">
                        </div>
                      </div>
                      <div>&nbsp;</div>
            

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required" for="property_name" placeholder="Property Name" name="property_name" value="<?php echo set_value('property_name'); ?>" id="property_name">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="description"  placeholder="Description" name="description" value="<?php echo set_value('description'); ?>" id="description">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Purchased</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control has-feedback-left" required="required" for="date_purchased"  placeholder="Date Purchased" name="date_purchased" value="<?php echo set_value('date_purchased'); ?>" id="date_purchased">
                        </div>
                      </div> 
                     <div>&nbsp;</div>
   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Classification No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="classification_no"  placeholder="  Classification Number" name="classification_no" value="<?php echo set_value('classification_no'); ?>" id="classification_no">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Value</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="number" class="form-control " required="required" for="unit_value"  placeholder="  Unit Value" name="unit_value" value="<?php echo set_value('unit_value'); ?>" id="unit_value">
                            </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Total Value</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="number" class="form-control " required="required" for="total_value"  placeholder="  Total Value" name="total_value" value="<?php echo set_value('total_value'); ?>" id="total_value" readonly>
                        </div>
                        
                      </div>
                           <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">MR Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="mr_no"  placeholder="  MR Number" name="mr_no" value="<?php echo set_value('mr_no'); ?>" id="mr_no">
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
          var empID = new Array();
            $.ajax({
              url:"<?php echo base_url() ?>process_improvement/getemployeename",
              type: "POST",
              data: {'employeeID' : employeeID},
              dataType: 'json',
                success: function(data){
                  $('#lname').attr("value", data['lname']);
                  $('#fname').attr("value", data['fname']);
                  $('#mname').attr("value", data['mname']);
                  alert(data['lname']);
                },
                error: function(){
                  alert('Employee ID is not valid');
                  $('#lname').attr("value", "NO DATA");
                  $('#fname').attr("value", "NO DATA");
                  $('#mname').attr("value", "NO DATA");
                }
              });
    });
      $("#unit_value").change(function(){
        var getunit = document.getElementById("unit").value;
        var getvalue = document.getElementById("unit_value").value;
        var total = getunit * getvalue;
        $('#total_value').val(total);
      });
  })
</script>
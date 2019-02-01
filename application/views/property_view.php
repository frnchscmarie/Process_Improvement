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
                    <h2>List of Properties</h2>
                     <ul class="nav navbar-right panel_toolbox">
                  
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Property </a>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Add Property</h3>
    </div>
    <div class="modal-body">
    <div>&nbsp;</div>
  <div class="container">
    
    
    
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/addProperties'); 
  ?> 
              <form class="form-horizontal form-label-left">

                <div class="form-group">
            
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left"  required="required" for="property_no" id="inputSuccess2" placeholder="Property Number" name="property_no" value="<?php echo set_value('property_no'); ?>" id="property_no">
                        </div>
                      </div>

    <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewProperties')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Generate</button>
                        </div>
      </div>
    
  </div>
  
</div>
</div>
</div>
</div>
</form>

  <div class="container">
    <?php echo "qrcode"; ?>
                  <img src="http://localhost/Process_Improvement/application/libraries/qr-generator.php?t=<?=date("YmdHis")?>"/>
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewProperties'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
               </div>
                    </li>
                    </ul> <!--end of modal-->
              
                    <h4>List of Property</h4>
                    
                    <div class="clearfix"></div>
                     <div class="x_content">
                    
      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                    <tr id="trHead">
           
            <th >Property Number</th>
            <th >ACTION</th>

          </tr>
        </thead>
        <tbody>
             <?php
        if($mrRecord!=null){
                foreach($mrRecord as $p){  
                    echo "<tr><td>".$p['property_no']."</td>".'
                    <td><a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#squarespaceModal1"><i class="fa fa-pencil"></i> EDIT</a></td></tr>';
                   
                }
        }
        else{
            echo "No record";
                }
      
            ?>
        </tbody>

        <div class="modal fade" id="squarespaceModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">QR CODE</h3>
    </div>

    <div class="modal-body">
     <div class="container" >    

         <?php echo form_open('process_improvement/qrcode'); ?> 

         <?php 

         foreach($mrRecord as $p){
          $qr = $p['property_no'];
         }

         echo ('<img align= "center" src="'.base_url('/assets/qrcode/').$qr.'.png" />'); 

         ?>

               <!--       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left"  required="required" for="property_no" id="inputSuccess2" placeholder="Property Number" name="property_no" value="<?php echo $property_no?>" id="property_no">
                        </div>
                      </div> -->
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="employeeID" id="inputSuccess2" placeholder=" Employee ID" name="employeeID" value="<?php echo set_value('employeeID')?>" id="employeeID">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Name</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required"for=lname" id="inputSuccess2" placeholder=" Last Name" name="lname" value="<?php echo set_value('lname'); ?>" id="lname">
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required"for="fname" id="inputSuccess2" placeholder=" First Name" name="fname" value="<?php echo set_value('fname'); ?>" id="fname">
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                         <input type="text" class="form-control"  required="required"for="mname" id="inputSuccess2" placeholder="Middle Name" name="mname" value="<?php echo set_value('mname'); ?>" id="mnamee">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Assigned</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="date_assigned" id="inputSuccess2" placeholder=" Date Assigned" name="date_assigned" value="<?php echo set_value('date_assigned'); ?>" id="date_assigned">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="qty" id="inputSuccess2" placeholder=" Quantity" name="qty" value="<?php echo set_value('qty'); ?>" id="qty">
                        </div>
                      </div>
            
            
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="unit" id="inputSuccess2" placeholder="Unit" name="unit" value="<?php echo set_value('unit'); ?>" id="unit">
                        </div>
                      </div>
                    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left"  required="required" for="property_name" id="inputSuccess2" placeholder="Property Name" name="property_name" value="<?php echo set_value('property_name'); ?>" id="property_name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="description" id="inputSuccess2" placeholder="Description" name="description" value="<?php echo set_value('description'); ?>" id="description">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Purchased</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control has-feedback-left" required="required" for="date_purchased" id="inputSuccess2" placeholder="Date Purchased" name="date_purchased" value="<?php echo set_value('date_purchased'); ?>" id="date_purchased">
                        </div>
                      </div> 
   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Classification No</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="classification_no" id="inputSuccess2" placeholder="  Classification Number" name="classification_no" value="<?php echo set_value('classification_no'); ?>" id="classification_no">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Value</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="unit_value" id="inputSuccess2" placeholder="  Unit Value" name="unit_value" value="<?php echo set_value('unit_value'); ?>" id="unit_value">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Value</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="total_value" id="inputSuccess2" placeholder="  Total Value" name="total_value" value="<?php echo set_value('total_value'); ?>" id="total_value">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">MR Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control has-feedback-left" required="required" for="mr_no" id="inputSuccess2" placeholder="  MR Number" name="mr_no" value="<?php echo set_value('mr_no'); ?>" id="mr_no">
                        </div>
                      </div> 
               
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
    </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>

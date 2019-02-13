<!DOCTYPE html>

<body class="nav-md">

    <div class="container body">
      <div class="main_container">
      
<?php echo form_open('process_improvement/updateHoliday/'.$id); ?> 
<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>

  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Update Holiday</h3>
                    <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                    <br />
        <div class="col-md-6" style="padding: 10px; text-align: center; margin-left: 250px;">
          
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            
                      <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Holiday Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="holiday" placeholder=" Holiday Name" name="holiday" value="<?php echo $holiday?>" id="holiday">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                 
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Holiday Date</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="dates"  placeholder="Holiday Date" name="dates" value="<?php echo $dates ?>" id="dates">
                        </div>
                      </div>
                      <div>&nbsp;</div>
    
  
  <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 30%;"><a href="<?php echo base_url('process_improvement/viewCalendar/')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" for="inputSuccess2" value="submit">Submit</button>
                        </div>
      </div>
    
  </div>
  </form>
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

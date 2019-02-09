<!DOCTYPE html>

<body class="nav-md">

    <div class="container body">
      <div class="main_container">
        
        
<?php echo form_open('process_improvement/updateTraining/'.$title);?> 
<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>

  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Update Training</h3>
                    <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                    <br />
        <div class="col-md-6" style="padding: 10px; text-align: center; margin-left: 250px;">
          
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            
                      <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="title" placeholder=" Title" name="title" value="<?php echo $title?>" id="title">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                  <label class=" col-md-12 col-sm-12 col-xs-12">INCLUSIVE DATES</label><br>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 right">From</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="inc_from"  placeholder=" Inclusive dates" name="inc_from" value="<?php echo $inc_from ?>" id="inc_from">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">To</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="inc_to" placeholder="Inclusive dates" name="inc_to" value="<?php echo $inc_to ?>" id="inc_to">
                        </div>
                      </div>
                      <div>&nbsp;</div>                  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No of Hours</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="no_of_hours" placeholder=" No of Hours" name="no_of_hours" value="<?php echo $no_of_hours?>" id="no_of_hours">
                        </div>
                      </div>
                      <div>&nbsp;</div>
            
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Conducted By</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="conducted_by"  placeholder="Conducted By" name="conducted_by" value="<?php echo $conducted_by ?>" id="conducted_by">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Attachments</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input action= "/"method="post" type="file" for="attachments" placeholder="Attachments" name="attachments" value="<?php echo $attachments ?>" >

                        </div>
                      </div>
    
  
  <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 30%;"><a href="<?php echo base_url('process_improvement/viewTraining/')?>" style="color: white;">Cancel</a></button>
                          
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

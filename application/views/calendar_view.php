<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>
  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>HOME</h2>
                    <div class="clearfix"></div>
                     <div class="x_content">
                        <br />
   <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-8 col-xs-12">
                <div class="tile-stats" style="background-color: #FFCC33; color: black;">
                  <div class="icon" style="color: black;"><i class="fa fa-briefcase"></i></div>
                  <div class="count" >179</div>
                  <h3 style="color: black;">EMPLOYEES</h3>
                  <p>Total no. of employees in RBSD</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color: #CC3333; color: white;">
                  <div class="icon" style="color: white;"><i class="fa fa-clock-o"></i></div>
                  <div class="count">179</div>
                  <h3 style="color: white;">ON LEAVE</h3>
                  <p style="color: white;">Total no. of employees on leave</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-8 col-xs-12">
                <div class="tile-stats" style="background-color: #FF9966; color: black;">
                  <div class="icon" style="color: black;"><i class="fa fa-book"></i></div>
                  <div class="count">179</div>
                  <h3 style="color: black;">PROPERTIES</h3>
                  <p>Total no. of properties</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background-color:  #669933; color:white;">
                  <div class="icon" style="color: white;"><i class="fa fa-comments-o"></i></div>
                  <div class="count">             
                  0</div>
                  <h3 style="color: white;">HOLIDAYS</h3>
                  <p>Total no. of holidays this year</p>
                </div>
              </div>
     </div>
                  <div class="x_title">
                    <h4>HOLIDAYS</h4>
                    <div class="clearfix"></div>
                  </div>
                  <br/>
                 <?php echo form_open('process_improvement/addHoliday'); ?> 
                 <form class="form-horizontal form-label-left">
                    <div class = "form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-6">Holiday Name</label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                         <input type="text" class="form-control has-feedback-left col-md-4 col-sm-4 col-xs-12"  required="required" for="holiday_name" id="holiday_name" placeholder="Enter Holiday Name" name="holiday_name" value="<?php echo set_value('holiday'); ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-6">Holiday Date</label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                         <input type="date" class="form-control has-feedback-left col-md-4 col-sm-4 col-xs-12" required="required" for="holiday_date" id="holiday_date" placeholder="Holiday Date" name="holiday_date" value="<?php echo set_value('dates'); ?>">
                        </div>
                    </div>
                  
                        <div class="col-md-2 col-sm-2 col-xs-6 ">
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
                                        
                </form>
                <br /> <br />

                <table id="datatable" class="table table-striped table-bordered col-md-12">
                        <thead>
    
                      <tr id="trHead">
            <th >Holiday Name</th>
            <th >Holiday Date</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($holiday!=null){
                foreach($holiday as $h){  
                    echo "<tr><td>".$h['holiday']."</td><td>".$h['dates']."</td>".'
                    <td><a href="'.base_url('process_improvement/updateHoliday/'.$h['id']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a><a href="'.base_url('process_improvement/delHoliday/'.$h['id']).'"class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></a></td></tr>';
                    
                }
        }
            ?>
        </tbody>
    </table>

            </div>


                 </div>
             </div>
         </div>
     </div>
 </div>
</div>

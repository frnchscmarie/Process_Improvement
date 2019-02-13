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
                    <div class="clearfix"></div>
                  </div>
                    <div class="clearfix"></div>
                    <div class="x_content" >
                    <?php echo validation_errors(); ?>
  
                    <?php echo form_open('process_improvement/viewTrainingAdmin'); 
                    ?> 

                        <div class="x_content">
                            <div class="col-md-12" style=" text-align: center; ">

                              <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                    <tr id="trHead">
           <th >Employee ID</th>
            <th >Employee Name</th>
            <th >Title of Seminar/Conference/Workshop/Short Courses<br>(write in full)</th>
            <th colspan="2">Inclusive Dates<br><label style="margin-left: 0%;">From</label><label style="margin-left: 30%;">To</label></th>
            <th >Number of Hours</th>
            <th >Conducted/Sponsored by<br>(Write in full)</th>
            <th >Attachments</th>
          </tr>
        </thead>
        <tbody>
                       <?php
                       if($alltraining!=null){
                         foreach($alltraining as $a){  
                            echo "<tr><td>".$a['employeeID']."</td><td>".$a['username']."</td><td>".$a['title']."</td><td>".$a['inc_from']."</td><td>".$a['inc_to']."</td><td>".$a['no_of_hours']."</td><td>".$a['conducted_by']."</td><td>".$a['attachments']."</td>".'<td></tr>';
                    
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
          </div>
        </div>
      </div>
    </body>

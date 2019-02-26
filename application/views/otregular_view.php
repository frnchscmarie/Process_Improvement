<?php foreach($name as $n){
    $last = $n['lname'];
    $first = $n['fname'];
    $middle = $n['mname'];
  }

?>


<?php
  foreach($supervisor as $i){
    $name = $i['username'];
    }
?> 


<?php 
foreach($getot as $ss){
  $jan = $ss['jan'];
  $feb = $ss['feb'];
  $mar = $ss['mar'];
  $apr = $ss['apr'];
  $may = $ss['may'];
  $june = $ss['june'];
  $july = $ss['july'];
  $aug = $ss['aug'];
  $sept = $ss['sept'];
  $oct = $ss['oct'];
  $nov = $ss['nov'];
  $dec = $ss['dec'];
}
?>

<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Overtime List</h2>
                <ul class="nav navbar-right panel_toolbox">
                      <li  style="background-color: #008080; border-radius: 10px;"><a data-toggle="modal" data-target="#squarespaceModal" class="butt5"  style="color: white; font-weight: bold;><i class="fa fa-plus" style="color: black;"></i> + Add Overtime </a>
                    
                    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                              <h3 class="modal-title" id="lineModalLabel">OVERTIME APPLICATION</h3>
                          </div>
                            <div class="modal-body">
                                <div class="container">

                                  <?php echo validation_errors(); ?>
  
                                  <?php echo form_open('process_improvement/addOT'); ?> 
                                    <form class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date </label>
                                          <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_filing" id="date_of_filing" required="required" value="<?php echo date('Y-m-d'); ?>" readonly>
                                          </div>
                                    </div>
                                        <div>&nbsp;</div>

                                        <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Overtime Date</label>
                                          <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input class="form-control col-md-4 col-sm-4 col-xs-6" type="date" name="date_of_ot" id="date_of_ot" required="required" value="<?php echo set_value('date_of_ot'); ?>" >
                                          </div>
                                    </div>
                                        <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Authorized OT Time</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" id="auto_OT" name="auto_OT" value="<?php echo set_value('auto_OT'); ?>"required="required" class="form-control col-md-7 col-xs-12" placeholder="Authorized Time" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>



                      <label class=" col-md-12 col-sm-12 col-xs-12">ACTUAL OT TIME </label>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Start</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="time" name="aot_from" id="aot_from" required="required" value="<?php echo set_value('aot_from') ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Finish</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="time" name="aot_to" id="aot_to" required="required" value="<?php echo set_value('aot_to') ?>" max = "4:00" >
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RATE</label>
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">1.25(weekdays)</label>
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">1.50(weekend)</label>
                      </div>
                      <div>&nbsp;</div>                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hour/s</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input class="form-control col-md-6 col-sm-6 col-xs-12" type="number" name="hours_weekdays" id="hours_weekdays"  value="<?php echo set_value('hours_weekdays') ?>" min=0>
                         </div>


                          <div class="col-md-4 col-sm-4 col-xs-12">
                         <input class="form-control col-md-6 col-sm-6 col-xs-12" type="number" name="hours_weekends" id="hours_weekends" value="<?php echo set_value('hours_weekends') ?>" min=0 >
                        </div>
                      </div>
                      <div>&nbsp;</div><br />
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Minute/s</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input class="form-control col-md-6 col-sm-6 col-xs-12" type="number" name="minutes_weekdays" id="minutes_weekdays"  value="<?php echo set_value('minutes_weekdays') ?>" >
                         </div>

                          <div class="col-md-4 col-sm-4 col-xs-12">
                         <input class="form-control col-md-6 col-sm-6 col-xs-12" type="number" name="minutes_weekends" id="minutes_weekends"  value="<?php echo set_value('minutes_weekends') ?>" >
                        </div>
                      </div>
                      <div>&nbsp;</div><br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tasks to be Accomplished</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="text" name="task" id="task" required="required" value="<?php echo set_value('task'); ?>" placeholder="Input task/s" >
                        </div>
                      </div>
                      <div>&nbsp;</div><br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Remaining OT time</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="text" name="allotted" id="allotted" required="required" value="<?php echo set_value('task'); ?>" placeholder="Allotted Time for OT" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div><br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">For the month of</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="text" name="month" id="month" required="required" value="<?php echo set_value('task'); ?>" placeholder="Month" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div><br />                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Authorized By</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control col-md-4 col-sm-4 col-xs-6" type="text" name="super" id="super" required="required" 
                          value="<?php print_r($name)?>" readonly>
                        </div>
                      </div>
                      <div>&nbsp;</div>


  
                        <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewOvertimeRegular')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
                       </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  <div class="">
  <?php echo validation_errors(); ?>
  <?php echo form_open('process_improvement/viewOvertime'); 
  ?> 
        <div class="">
          <div class="x_content" >
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                   
<!--pdf--> <div class="x_content" id="otform" style="margin-top: 3%;">

                   <label>Employee Name: <?php echo("$last, $first $middle")  ?></label>
                   <table id="datatable" class="table table-striped table-bordered">

                      <thead>
  
                          <tr id="trHead">
                            <th rowspan="3">Date</th>          
                            <th rowspan="3">Authorized OT Time</th>
                            <th colspan="2">Actual OT Time</th>
                            <th colspan="4">OT Rate</th>
                            <th rowspan="3">Tasks to be Accomplished /<br>Actual Accomplishments<br></th>
                            <th rowspan="3">Authorized By: </th>
                          </tr>

                          <tr id="trHead">
                            <th rowspan="2">Start</th>          
                            <th rowspan="2">Finish</th>
                            <th colspan="2">1.25</th>
                            <th colspan="2">1.50</th>
                          </tr>

                           <tr id="trHead">
                            <th >Hour</th>          
                            <th >Minute</th>
                            <th >Hour</th>          
                            <th >Minute</th>
                          </tr>


                      </thead>

                       <tbody>
                       <?php
                       if($ot!=null){
                         foreach($ot as $o){  
                          echo "<tr><td>".$o['date_of_filing']."</td><td>".$o['auto_OT']."</td><td>".$o['aot_from']."</td><td>".$o['aot_to']."</td><td>".$o['hours_weekdays']."</td><td>".$o['minutes_weekdays']."</td><td>".$o['hours_weekends']."</td><td>".$o['minutes_weekends']."</td><td>".$o['task']."</td>";
                          }
                        echo "<td>".$name."</td></tr>";
                        }
                        
                       ?>
          
                      </tbody>
                     </table>
</div>

     <div class="col-md-6" style="padding: 10px; text-align: center;">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12">AUTHORIZED BY:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $name?>" readonly="">
                      </div>
                  </div>

                     </form>
  </div>

              <div style="float: right; margin-top: 10px;">
                <button class="btn btn-success"  onclick="printContent('otform'); alertfunction();">PRINT</a></button>
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
</div>



 <script>
$(document).ready(function(){
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });

 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 

});

  function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
 document.body.innerHTML = restorepage;
}

</script>


<script type="text/javascript">
  
  $(document).ready(function(){
    $("#date_of_ot").change(function(){

      $("#aot_to").attr("disabled",false);
      $("#aot_from").attr("disabled",false);
      var day = new Date(document.getElementById("date_of_ot").value);
      var getday = day.getDay();
      var getmonth = day.getMonth();

      if(getday == "1" || getday == "2" || getday == "3" || getday == "4" || getday == "5"){
        $("#hours_weekends").attr("disabled", true);
        $("#minutes_weekends").attr("disabled",true);
        $("#hours_weekdays").attr("disabled", false);
        $("#minutes_weekdays").attr("disabled",false);

        var getto = document.getElementById("aot_to");
        getto.onchange=function(){
          var from = document.getElementById("aot_from").value;
          var cheat = new Date('1970-01-01T' + from);
          var hour = cheat.getHours();
          var hourget = cheat.getHours();
          var hour = (hour + 2);
          var x = document.getElementById("aot_to").max = hour;
          
          var to = document.getElementById("aot_to").value;
          var cheat2 = new Date('1970-01-01T' + to);
          var hour2 = cheat2.getHours();
          var diff = hour2 - hourget;
          
          if(hour2<=x){
            $(":submit").attr("disabled", false);
            document.getElementById("auto_OT").value =  hourget + ":00 - "+ hour2+":00";
            document.getElementById("hours_weekdays").value = diff;
            if(getmonth == 0){
              var otcred = '<?php echo $jan ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "January";
            }else if(getmonth == 1){
              var otcred = '<?php echo $feb ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "February";
            }else if(getmonth == 2){
              var otcred = '<?php echo $mar ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "March";
            }else if(getmonth == 3){
              var otcred = '<?php echo $apr ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "April";
            }else if(getmonth == 4){
              var otcred = '<?php echo $may ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "May";
            }else if(getmonth == 5){
              var otcred = '<?php echo $june ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "June";
            }else if(getmonth == 6){
              var otcred = '<?php echo $july ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "July";
            }else if(getmonth == 7){
              var otcred = '<?php echo $aug ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "August";
            }else if(getmonth == 8){
              var otcred = '<?php echo $sept ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "September";
            }else if(getmonth == 9){
              var otcred = '<?php echo $oct ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "October";
            }else if(getmonth == 10){
              var otcred = '<?php echo $nov ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "November";
            }else if(getmonth == 11){
              var otcred = '<?php echo $dec ?>';
              var news = otcred - diff;
              document.getElementById("allotted").value = news;
              document.getElementById("month").value = "December";
            }
          }else{
            alert("Only until "+hour+":00 is allowed on weekdays");
            $(":submit").attr("disabled", true);
            document.getElementById("auto_OT").value = "Invalid Time";
          }
        }



      }else{
        $("#hours_weekdays").attr("disabled", true);
        $("#minutes_weekdays").attr("disabled",true);
        $("#hours_weekends").attr("disabled", false);
        $("#minutes_weekends").attr("disabled",false);
      }
    });
    $("#aot_to").attr("disabled",true);
    $("#aot_from").attr("disabled",true);

  })
</script>
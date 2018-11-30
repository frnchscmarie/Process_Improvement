var employeeID = $(this).val();
                if(employeeID == '')
                {
                    alert('error');
                }
                else
                {
                    $('#data').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>process_improvement/display",
                        type: "POST",
                        data: {'employeeID' : employeeID},
                        dataType: 'json',
                        success: function(data){
                           $('data').html(data);
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                }












        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="row"></div>
            </div>

            <div class="clearfix"></div>
           
      
      <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Profile</h2>
      
                    <div class="clearfix"></div>
                  
                  <div class="x_content">
          <div>&nbsp;</div>
                    <div>
                      <div class="" style="width: 32%; height: 398px; border: 3px solid gray; position: absolute; margin-left: 3%;"> </div>
                     <table  class="table table-striped table-bordered" style="width: 60%; align: center; margin-left: 37%;" name="data">
                      <thead > 
           <tr id="trHead" name="name">
            <th style="width: 35%;" scope="row">NAME</th>
                        <td> </td>  
          </tr>
        
          <tr id="trHead" name="employeeID">
            <th scope="row">EMPLOYEE ID NO </th>

          </tr>
          
          <tr id="trHead">
            <th >BIRTHDAY</th>
<!--             <td><?php print_r($birthday)?></td> -->
        
          </tr>
          
          <tr id="trHead">
            <th >DATE HIRED</th>
<!--             <td><?php print_r($dh)?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >POSITION</th>
<!--             <td><?php print_r($pos)?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >DATE OF LAST PROMOTION</th>
<!--             <td><?php print_r($pd)?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >CIVIL STATUS</th>
<!--             <td><?php print_r($cs)?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >PG LEVEL</th>
<!--             <td><?php print_r($pl)?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >OFFICE</th>
<!--             <td><?php echo 'N/A'?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >CELLPHONE NUMBER</th>
<!--             <td><?php print_r($cn)?></td> -->
          </tr>
          
          <tr id="trHead">
            <th >EMAIL ADDRESS</th>
<!--             <td><?php print_r($ea)?></td> -->
          </tr>
          
        </thead>
      <tbody>
        
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
        <!-- /page content -->





foreach($data as $d)
      {
          $arr = array(
                'employeeID' => $d['employeeID'],
                'employee_name' => $d['employee_name'],
                'pg_level' => $d['pg_level'],
                'birthday' => $d['birthday'],
                'date_hired' => $d['date_hired'],
                'position' => $d['position'],
                'promo_date'=>$d['promo_date'],
                'email' => $d['email'],
                'civil_stat' => $d['civil_stat'],
                'cp_no' => $d['cp_no'],                                                
              );
      }
      $arr[] = $data;
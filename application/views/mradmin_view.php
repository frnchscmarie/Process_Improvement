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
                    <h2>MR Admin</h2>
                    <div class="clearfix"></div>
                  </div>
                    <div class="clearfix"></div>
                    <div class="x_content" >
                      <p class="text-muted font-13 m-b-30">Maintain Property</p>
                    <div>&nbsp;</div>

                  <div class="x_content">
                  <div class="col-md-5" style="padding: 0px; text-align: center; position: absolute;">

                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left row">


                         <div class="form-group col">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Employee Number</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="text" class="form-control" placeholder="Default Input" >
                               </div>
                          </div>
                              
                     

                          <div class="form-group col">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">QTY.</label>
                               <div class="col-md-2 col-sm-2 col-xs-4">
                                  <input type="text" class="form-control" >
                              </div>
                      
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Unit</label>
                               <div class="col-md-2 col-sm-2 col-xs-4">
                                  <input type="text" class="form-control" >
                               </div>
                          </div>

                            <div>&nbsp;</div>
                      
                          <div class="form-group">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12">Date of Purchase</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" class="form-control" placeholder="Default Input">
                                  </div>
                          </div>

                          <div class="form-group col">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12">Property Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" class="form-control" placeholder="Default Input" >
                                  </div>
                          </div> 
                      
                          <div class="form-group col">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12">Classification Number</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Default Input" >
                                </div>
                          </div>
                        </div>
                      </form>               
        


 <!--right side-->  
        <div class="col-md-6" style=" text-align: center; margin-left: 420px; ">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                     <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">Employee Name</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input" readonly="readonly">
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">Unit Value</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">Total Value</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
          </form>
        </div>
   

           
               
                  <div class="x_title" style="margin-top: 25%;">
                    <h4>List of Property</h4>
                    
                    <div class="clearfix"></div>
               </div>

                    <div class="clearfix"></div>
                     <div class="x_content">
                    
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                    <tr id="trHead">
            <th >Employee ID</th>
            <th >Employee Name</th>
            <th >MR Number</th>
            <th >Property Number</th>
            <th >Name</th>
            <th >Description</th>
            <th >Date Assigned</th>
          </tr>
        </thead>
        <tbody>
           <!-- <?php
        if($mr!=null){
                foreach($mr as $c){  
                    echo "<tr><td>".$c['employeeID']."</td><td>".$c['employee_name']."</td><td>".$c['mr_no']."</td><td>".$c['property_no']."</td><td>".$c['property_name']."</td><td>".$c['description']."</td>><td>".$c['date_assigned'].'</td></tr>';
                   
                }
        }
            ?>-->
        </tbody>
    </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


</body>

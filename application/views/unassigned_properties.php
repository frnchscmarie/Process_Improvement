<body>
<div class="container body">
    <div class="main_container">
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Unassigned Properties</h2>
                      <div class="clearfix"></div>
                        <div class="x_content">
                        <br />
                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr id="trHead">
                                <th >PROPERTY NO.</th>
                                <th >NAME</th>
                                <th >QTY.</th>
                                <th >UNIT</th>
                                <th >DESCRIPTION</th>
                                <th >DATE OF PURCHASE</th>
                                <th >CLASSIFICATION NO.</th>
                                <th >UNIT VALUE</th>
                                <th >TOTAL VALUE</th>
                                <th >MR NUMBER</th>
                                <th >STATUS</th>
                                <th >ACTION</th>
                              </tr>
                            </thead>
                              <tbody>
                                <?php
                                  if($memo!=null){
                                    foreach($memo as $m){  
                                      echo "<tr><td>".$m['property_no']."</td><td>".$m['property_name']."</td><td>".$m['qty']."</td><td>".$m['unit']."</td><td>".$m['description']."</td><td>".$m['date_purchased']."</td><td>".$m['classification_no']."</td><td>".$m['unit_value']."</td><td>".$m['total_value']."</td><td>".$m['mr_no']."</td><td>".$m['status']."</td>".'
                                        <td><a href="'.base_url('process_improvement/assignProperties/'.$m['property_no']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> ASSIGN PROPERTY</a></td></tr>';  
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
</body>
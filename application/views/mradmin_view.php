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
                     <div class="x_content">
                    
      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
            <tr id="trHead">
            <th >Property Number</th>
            <th >Employee ID</th>
            <th >Employee Name</th>
            <th >Date Assigned</th>
            <th >Quantity</th>
            <th >Unit</th>
            <th >Property Name</th>
            <th >Description</th>
            <th >Date Purchased</th>
            <th >Classification Number</th>
            <th >Unit Value</th>
            <th >Total Value</th>
            <th >MR Number</th>
          </tr>
        </thead>
        <tbody>
             <?php
        if($records!=null){
                foreach($records as $p){  
                    echo "<tr><td>".$p['property_no']."</td><td>".$p['employeeID']."</td><td>".$p['lname'].", ".$p['fname']." ".$p['mname']."</td><td>".$p['date_assigned']."</td><td>".$p['qty']."</td><td>".$p['unit']."</td><td>".$p['property_name']."</td><td>".$p['description']."</td><td>".$p['date_purchased']."</td><td>".$p['classification_no']."</td><td>".$p['unit_value']."</td><td>".$p['total_value']."</td><td>".$p['mr_no']."</td></tr>";
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
</body>

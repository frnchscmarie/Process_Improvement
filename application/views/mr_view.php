<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>
  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Memorandum Receipt</h4>
                    
                    <div class="clearfix"></div>
                     <div class="x_content">
                    
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
  
                    <tr id="trHead">
            <th >QTY.</th>
            <th >UNIT</th>
            <th >NAME</th>
            <th >DESCRIPTION</th>
            <th >DATE OF PURCHASE</th>
            <th >PROPERTY NO.</th>
            <th >CLASSIFICATION NO.</th>
            <th >UNIT VALUE</th>
            <th >TOTAL VALUE</th>
            <th >MR NUMBER</th>
            <th >DATE ASSIGNED</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($mr!=null){
                foreach($mr as $c){  
                    echo "<tr><td>".$c['qty']."</td><td>".$c['unit']."</td><td>".$c['unit_name']."</td><td>".$c['description']."</td><td>".$c['date_purchased']."</td><td>".$c['property_no']."</td><td>".$c['classification_no']."</td><td>".$c['unit_value']."</td><td>".$c['total_value']."</td><td>".$c['mr_no']."</td><td>".$c['date_assigned'].'</td></tr>';
                   
                }
        }
            ?>
        </tbody>
    </table>
    </div>
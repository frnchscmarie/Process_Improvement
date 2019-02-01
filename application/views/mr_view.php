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
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($mr!=null){
                foreach($mr as $m){  
                    echo "<tr><td>".$m['qty']."</td><td>".$m['unit']."</td><td>".$m['lname'].", ".$m['fname']." ".$m['mname']."</td><td>".$m['description']."</td><td>".$m['date_purchased']."</td><td>".$m['property_no']."</td><td>".$m['classification_no']."</td><td>".$m['unit_value']."</td><td>".$m['total_value']."</td><td>".$m['mr_no']."</td><td>".$m['date_assigned']."</td>".'
                    <td><a href="'.base_url('process_improvement/qrcode/'.$m['property_no']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></td></tr>';
                   
                }
        }
        else{
            echo "No record";
        }
            ?>
        
        </tbody>
    </table>
    </div>
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
                    <td><a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#squarespaceModal"><i class="fa fa-eye"></i> VIEW</a></td></tr>';
                   
                }
        }
        else{
            echo "No record";
        }
            ?>
        
        </tbody>
<!--modal start-->

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">QR CODE</h3>
    </div>

    <div class="modal-body">
     <div class="container" style="margin-left: 26%;">    

         <?php echo form_open('process_improvement/qrcode'); ?> 

         <?php echo ('<img src="'.base_url('/assets/qrcode/').'15-082-238.png" />'); ?>
     </div>
    </div>
</div>
</div>
</div>
<!-- /modal-->

</table>
</div>
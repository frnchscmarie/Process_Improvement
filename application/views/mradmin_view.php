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
            <th >STATUS</th>
             <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
             <?php
        if($records!=null){
                foreach($records as $p){  
                    echo "<tr><td>".$p['property_no']."</td><td>".$p['employeeID']."</td><td>".$p['lname'].", ".$p['fname']." ".$p['mname']."</td><td>".$p['date_assigned']."</td><td>".$p['qty']."</td><td>".$p['unit']."</td><td>".$p['property_name']."</td><td>".$p['description']."</td><td>".$p['date_purchased']."</td><td>".$p['classification_no']."</td><td>".$p['unit_value']."</td><td>".$p['total_value']."</td><td>".$p['mr_no']."</td><td>".$p['status']."</td>".' <td><a class="btn btn-success btn-xs" data-toggle="modal" id="viewnow" data-id="'.$p['property_no'].'" data-target="#squarespaceModal"><i class="fa fa-eye">CHECK</i></a> <a href="'.base_url('process_improvement/updateMR/'.$p['property_no']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      </td></tr>';

                }

        }
            ?>
        </tbody>

 
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">QR CODE</h3>
    </div>

    <div class="modal-body">
     <div class="container" style="margin-left: 26%;">    
         <input type="text" name="qr" id="qr" value="" readonly />
         <input type="text" name="check" id="check" maxlength="14" />
         <button class="btn btn-success btn-xs leaveapprove" id="approve" data-id=""> APPROVE </button>
         <?php echo ('<img id="imageid"'); ?>
        
     </div>
    </div>
</div>
</div> 
</div> 
<!-- /modal-->




    </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

</body>

<script type="text/javascript">
  $(document).on('click', '#approve', function(){
    var id = $(this).data("id");
    $.ajax({
      url: "<?php echo site_url('process_improvement/approvemr') ?>",
      type: "POST",
      data: {id:id},
      success: function(data){
        alert("Memorandum Receipt Approved!");
        $("#leave_main").hide();
        location.reload();
      }
    });  
  });


  $(document).on('click', '#viewnow', function(){
    var getID = $(this).data('id');
    $('#approve').attr('data-id' , getID);
     $(".modal-body #qr").val(getID);
     $("#check").change(function(){
      var checkid = document.getElementById("check").value;
      if(getID==checkid){
        $(":button").attr("disabled", false);
      }else{
        $(":button").attr("disabled", true);
        alert("Qr is not the same");
      }
     });
     document.getElementById("imageid").src="../assets/qrcode/"+getID+".png";
  });   
</script>
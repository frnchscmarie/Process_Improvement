<div class="container body">
      <div class="main_container">

      <div class="right_col" role="main">
        <div class="">
    
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pull-Out Properties</h2>
                    
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
            <th >DATE ASSIGNED</th>
            <th> STATUS</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php
        if($approve!=null){
                foreach($approve as $ma){  
                    echo "<tr><td>".$ma['property_no']."</td><td>".$ma['property_name']."</td><td>".$ma['qty']."</td><td>".$ma['unit']."</td><td>".$ma['description']."</td><td>".$ma['date_purchased']."</td><td>".$ma['classification_no']."</td><td>".$ma['unit_value']."</td><td>".$ma['total_value']."</td><td>".$ma['mr_no']."</td><td>".$ma['date_assigned']."</td> <td>".$ma['status']."</td>".'
                    <td><a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#squarespaceModal"><i class="fa fa-eye"></i> VIEW</a><a class="btn btn-success btn-xs" data-toggle="modal" id="viewnow" data-id="'.$ma['property_no'].'" data-target="#squarespaceModal"><i class="fa fa-eye">CHECK</i></a>
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
         <input type="text" name="qr" id="qr" value="<?php echo$ma['property_no']?>" readonly />
         <input type="text" name="check" id="check" maxlength="14" />
         <button class="btn btn-danger btn-xs" id="return" data-id=""><i class="fa fa-trash-o"></i> RETURN </button>
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
</div>
</div>
</div>

<script type="text/javascript">
  $(document).on('click', '#return', function(){
    var id = $(this).data("id");
    $.ajax({
      url: "<?php echo site_url('process_improvement/returnmr') ?>",
      type: "POST",
      data: {id:id},
      success: function(data){
        alert("Memorandum Receipt Returned!");
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
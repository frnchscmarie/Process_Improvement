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
                    <td><a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#squarespaceModal"><i class="fa fa-eye"></i> VIEW</a>
                    <button class="btn btn-danger btn-xs" id="return" data-id="'.$ma['property_no'].'"><i class="fa fa-trash-o"></i> RETURN </button></td></tr>';
                   
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

</script>
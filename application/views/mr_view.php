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
                    <h2>Memorandum Receipt</h2>
                    
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
        if($mr!=null){
                foreach($mr as $m){  
                    echo "<tr><td>".$m['property_no']."</td>
                    <td>".$m['property_name']."</td><td>".$m['qty']."</td>
                    <td>".$m['unit']."</td><td>".$m['description']."</td>
                    <td>".$m['date_purchased']."</td><td>".$m['classification_no']."</td>
                    <td>".$m['unit_value']."</td>
                    <td>".$m['total_value']."</td>
                    <td>".$m['mr_no']."</td>
                    <td>".$m['date_assigned']."</td> 
                    <td>".$m['status']."</td>".'
                    <td>
                    <a class="btn btn-primary btn-xs" data-toggle="modal" id="viewnow" data-id="'.$m['property_no'].'" data-target="#squarespaceModal">
                    <i class="fa fa-eye"></i> VIEW</a>
                    <a href="'.base_url('process_improvement/pulloutMr/'.$m['property_no']).'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> PULLOUT</a></td></tr>';
                   
                }
        }
                  ?>
        
        </tbody>
      </table>
    </div>
  </div>
</div>
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
         <input type="text" name="bookId" id="bookId" value=""/>
         <?php echo ('<img id="imageid"'); ?>
         <br/>
         
     </div>
    </div>
</div>
</div>
</div>
<!-- /modal-->


</div>
</div>
</div>
</div>
</div>
</div>
</div>


</body>

<script type="text/javascript">
  $(document).on('click', '#viewnow', function(){
    var getID = $(this).data('id');
     $(".modal-body #bookId").val(getID);
     document.getElementById("imageid").src="../assets/qrcode/"+getID+".png";

     
  });   

</script>
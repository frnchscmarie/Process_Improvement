
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
                    <h2>List of Properties</h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li  style="background-color: #008080; border-radius: 10px;"><a data-toggle="modal" data-target="#squarespaceModal" class="butt5"  style="color: white; font-weight: bold;><i class="fa fa-plus" style="color: black;"></i> + Add Property </a>
                          
                          <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                  <h3 class="modal-title" id="lineModalLabel">Add Property</h3>
                                </div>
                                  <div class="modal-body">
                                    <div>&nbsp;</div>
                                    <div class="container">
                                      <?php echo validation_errors(); ?>
                                      <?php echo form_open('process_improvement/addProperties'); 
                                      ?> 
                                      <form class="form-horizontal form-label-left">
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Property Number</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                              <input type="text" class="form-control has-feedback-left"  required="required" for="property_no" placeholder="20xx-xxxx-xxxxx" name="property_no" value="<?php echo set_value('property_no'); ?>" id="property_no">
                                            </div>
                                        </div>

                                        <div class="">
                                          <label class="control-label col-sm-4">&nbsp;</label>
                                        </div>
  
                                        <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewProperties')?>" style="color: white;">Cancel</a></button>
                                            <button type="submit" class="btn btn-success" value="submit">Generate</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                                <div class="container">
                                  <?php echo validation_errors(); ?>
                                  <?php echo form_open('process_improvement/viewProperties'); 
                                  ?>            
                            
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                            </ul> <!--end of modal-->
            
                            <div class="clearfix"></div>
                              <div class="x_content">
                                <br />
                                <table id="datatable" class="table table-striped table-bordered">
                                  <thead>
                                    <tr id="trHead">
                                      <th >Property Number</th>
                                      <th >ACTION</th>
                                    </tr>
                                  </thead>
                              
                                  <tbody>
                                    <?php
                                      if($mrRecord!=null){
                                        foreach($mrRecord as $p){
                                          $spaghetti = $p['property_no'];  
                                            echo "<tr><td>".$p['property_no']."</td>".'
                                              <td><a href="'.base_url('process_improvement/editProperties/'.$p['property_no']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> ADD DETAILS</a></td></tr>';
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
<script type="text/javascript">
  
$('#property_no').keyup(function() {
  var today = new Date();
  var y = today.getFullYear();
  var foo = $(this).val().split("-").join(""); // remove hyphens
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
  }
  $(this).val(foo);
  if(foo.length!=14){
    $(":submit").attr("disabled", true);
  }else{
    $(":submit").attr("disabled", false);
  }
});

</script>

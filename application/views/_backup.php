                      <div class="form-group col" style="margin-left: 36%; margin-bottom: 50px;">
                        <div class="col-md-10 col-sm-10 col-xs-10" style=" width: 96.5%;">
                        <select class="form-control" name="dropdown" id="dropdown">
                        <option value="">Select Employee</option>
                        <?php foreach($employee as $employee): ?>
                            <option value="<?php echo $employee->employeeID; ?>"><?php echo $employee->employee_name; ?></option>
                        <?php endforeach; ?>
                       </select>
                        </div>
                      </div>


                    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

                        <script type="text/javascript">
                            $(document).ready(function(){
                               $('#dropdown').on('change', function(e){
                                e.preventDefault();
                                var employeeID = $(this).val();
                                    if(employeeID == '')
                                    {
                                        alert('error');
                                    }
                                    else
                                    {
                                        $.ajax({
                                            url:"<?php echo base_url() ?>process_improvement/display",
                                            type: "POST",
                                            data: {'employeeID' : employeeID},
                                            dataType: 'json',
                                            success: function(data){
                                              $('#name').html(data[0]['employee_name']);
                                              $('#employeeID').html(data[0]['employeeID']);
                                              $('#pl').html(data[0]['pg_level']);
                                              $('#cs').html(data[0]['civil_stat']);
                                              $('#cp').html(data[0]['cp_no']);
                                              $('#prom').html(data[0]['promo_date']);
                                              $('#pos').html(data[0]['position']);
                                              $('#dh').html(data[0]['date_hired']);      
                                              $('#of').html(data[0]['office']);  
                                              $('#ea').html(data[0]['email']);  
                                              $('#birth').html(data[0]['birthday']); 
                                              },
                                            error: function(){
                                                alert(employeeID);
                                            }
                                        });
                                    }
                               }); 
                            });
                        </script>


</body>
<!DOCTYPE html>
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
                    <h2>Training Attended</h2>
                    <ul class="nav navbar-right panel_toolbox">
                  
                      <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Training </a>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Add Training</h3>
    </div>
    <div class="modal-body">
    <div>&nbsp;</div>
  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/addTraining'); 
  ?> 
              <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" required="required" for="title" id="inputSuccess2" placeholder=" Title" name="title" value="<?php echo set_value('title')?>" id="title">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                  <label class=" col-md-12 col-sm-12 col-xs-12">INCLUSIVE DATES</label><br>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 right">From</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="inc_from" id="inputSuccess2" placeholder=" Inclusive dates" name="inc_from" value="<?php echo set_value('inc_from'); ?>" id="inc_from">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">To</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="date" class="form-control has-feedback-left"  required="required"for="inc_to" id="inputSuccess2" placeholder="Inclusive dates" name="inc_to" value="<?php echo set_value('inc_to'); ?>" id="inc_to">
                        </div>
                      </div>
                      <div>&nbsp;</div>                  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No of Hours</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="no_of_hours" id="inputSuccess2" placeholder=" No of Hours" name="no_of_hours" value="<?php echo set_value('no_of_hours'); ?>" id="no_of_hours">
                        </div>
                      </div>
                      <div>&nbsp;</div>
            
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Conducted By</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input type="text" class="form-control has-feedback-left" required="required" for="conducted_by"  placeholder="Conducted By" name="conducted_by" value="<?php echo set_value('conducted_by'); ?>" id="conducted_by">
                        </div>
                      </div>
                      <div>&nbsp;</div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Attachments</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input action= "/"method="post" type="file" for="attachments" placeholder="Attachments" name="attachments" value="<?php echo set_value('attachments'); ?>" >

                        </div>
                      </div>

                      
    <div class="">
    <label class="control-label col-sm-4">&nbsp;</label>
  
    </div>
  
   <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('process_improvement/viewTraining')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
      </div>
    
  </div>
  
</div>
</div>
</div>
</div>
</form>

  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('process_improvement/viewTraining'); 
  ?> 
                       
            </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                      <div class="x_content">
                  
                      <table id="datatable" class="table table-striped table-bordered col-md-12">
                        <thead>
    <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                  <thead>
  
                    <tr id="trHead">
                      <th rowspan="2">Title</th>
                      <th colspan="2">Inclusive Dates</th>
                      <th rowspan="2">No. of Hours</th>
                      <th rowspan="2">Conducted/Sponsored By:</th>
                      <th rowspan="2">ATTACHMENTS</th>
                      <th rowspan="2">ACTION</th>
                    </tr>

                    
                  </thead>
        <tbody>
             <?php
        if($training!=null){
                foreach($training as $t){  
                    echo "<tr><td>".$t['title']."</td><td>".$t['inc_from']."</td><td>".$t['inc_to']."</td><td>".$t['no_of_hours']."</td><td>".$t['conducted_by']."</td><td>".$t['attachments']."</td>".'
                    <td><a href="'.base_url('process_improvement/updateTraining/'.$t['id']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a><a href="'.base_url('process_improvement/delTraining/'.$t['id']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td></tr>';
                    
                }
        }
            ?>
        </tbody>
    </table>

     <div style="float: right;"> 
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a>
                  </div>
                          </div>
                      
       
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
var globalFunctions = {};

globalFunctions.ddInput = function(elem) {
  if ($(elem).length == 0 || typeof FileReader === "undefined") return;
  var $fileupload = $('input[type="file"]');
  var noitems = '<li class="no-items"><span class="blue-text underline">Browse</span> or drop here</li>';
  var hasitems = '<div class="browse hasitems">Other files to upload? <span class="blue-text underline">Browse</span> or drop here</div>';
  var file_list = '<ul class="file-list"></ul>';
  var rmv = '<div class="remove"><i class="icon-close icons">x</i></div>'

  $fileupload.each(function() {
    var self = this;
    var $dropfield = $('<div class="drop-field"><div class="drop-area"></div></div>');
    $(self).after($dropfield).appendTo($dropfield.find('.drop-area'));
    var $file_list = $(file_list).appendTo($dropfield);
    $dropfield.append(hasitems);
    $dropfield.append(rmv);
    $(noitems).appendTo($file_list);
    var isDropped = false;
    $(self).on("change", function(evt) {
      if ($(self).val() == "") {
        $file_list.find('li').remove();
        $file_list.append(noitems);
      } else {
        if (!isDropped) {
          $dropfield.removeClass('hover');
          $dropfield.addClass('loaded');
          var files = $(self).prop("files");
          traverseFiles(files);
        }
      }
    });

    $dropfield.on("dragleave", function(evt) {
      $dropfield.removeClass('hover');
      evt.stopPropagation();
    });

    $dropfield.on('click', function(evt) {
      $(self).val('');
      $file_list.find('li').remove();
      $file_list.append(noitems);
      $dropfield.removeClass('hover').removeClass('loaded');
    });

    $dropfield.on("dragenter", function(evt) {
      $dropfield.addClass('hover');
      evt.stopPropagation();
    });

    $dropfield.on("drop", function(evt) {
      isDropped = true;
      $dropfield.removeClass('hover');
      $dropfield.addClass('loaded');
      var files = evt.originalEvent.dataTransfer.files;
      traverseFiles(files);
      isDropped = false;
    });


    function appendFile(file) {
      console.log(file);
      $file_list.append('<li>' + file.name + '</li>');
    }

    function traverseFiles(files) {
      if ($dropfield.hasClass('loaded')) {
        $file_list.find('li').remove();
      }
      if (typeof files !== "undefined") {
        for (var i = 0, l = files.length; i < l; i++) {
          appendFile(files[i]);
        }
      } else {
        alert("No support for the File API in this web browser");
      }
    }

  });
};

$(document).ready(function() {
  globalFunctions.ddInput('input[type="file"]');
});

</script>
 
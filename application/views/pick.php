<!-- pick -->

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="row"></div>
            </div>

            <div class="clearfix"></div>
           
      
      <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Profile</h2>
      
                    <div class="clearfix"></div>
                  
                  <div class="x_content">
          <div>&nbsp;</div>
          
<div>
  <div class="" style="width: 32%; margin-left: 3%;">
<img src="<?php echo base_url('assets/css/build/images/sampleuser.png'); ?>" alt="..." class="img-circle profile_img" style=" border: 3px solid gray;">
 <div class="form-group" style="position:; margin-top: 5%; margin-left: 18%;">
  <?php echo form_open('process_improvement/profilepic'); ?> 
          <form>
                <input type="file" name="image" style="margin-left: 6%;" enctype="multipart/form-data">
                <div>&nbsp;</div>

                 <button class="btn btn-primary" type="button" style="margin-left: 12%;" name="upload"><a href="<?php echo base_url('process_improvement/')?>" type="submit" style="color: white;">UPLOAD IMAGE</a></button>
          </form>                  
        
           </div>

 </div>

 <table  class="table table-striped table-bordered" style="width: 60%; align: center; margin-left: 37%; margin-top: -30%;">
          <?php foreach ($info as $f){
                $id=$f['id'];
                $fname=$f['fname'];
                $lname=$f['lname'];
                $mname=$f['mname'];
                $pg=$f['pg'];
                $bday=$f['bday'];
                $dh=$f['dh'];
                $pos=$f['pos'];
                $email=$f['email'];
                $pd=$f['pd'];
                $cs=$f['cs'];
                $cp=$f['cp'];
          }?>

          <thead > 
           <tr id="trHead">
            <th style="width: 35%;" scope="row">NAME</th>
            <td name="name" id="name"><?php echo("$lname, $fname $mname")?> </td> 
          </tr>
        
          <tr id="trHead">
            <th scope="row">EMPLOYEE ID NO </th>
            <td name="employeeID" id="employeeID"><?php echo($id)?> </td> 
          </tr>
          
          <tr id="trHead">
            <th >BIRTHDAY</th>
            <td name="birth" id="birth"><?php echo($bday)?></td> 
        
          </tr>
          
          <tr id="trHead">
            <th >DATE HIRED</th>
            <td name="dh" id="dh"><?php echo($dh)?> </td> 
          </tr>
          
          <tr id="trHead">
            <th >POSITION</th>
            <td name="pos" id="pos"><?php echo($pos)?> </td>
          </tr>
          
          <tr id="trHead">
            <th >DATE OF LAST PROMOTION</th>
            <td name="prom" id="prom"><?php echo($pd)?></td>
          </tr>
          
          <tr id="trHead">
            <th >CIVIL STATUS</th>
            <td name="cs" id="cs"><?php echo($cs)?> </td>
          </tr>
          
          <tr id="trHead">
            <th >PG LEVEL</th>
            <td name="pl" id="pl"> <?php echo($pg)?></td>
          </tr>
          
          <tr id="trHead">
            <th >OFFICE</th>
            <td name="of" id="of"> </td>
          </tr>
          
          <tr id="trHead">
            <th >CELLPHONE NUMBER</th>
            <td name="cp" id="cp"><?php echo($cp)?> </td>
          </tr>
          
          <tr id="trHead">
            <th >EMAIL ADDRESS</th>
            <td name="ea" id="ea"><?php echo($email)?> </td>
          </tr>
          
        </thead>
      <tbody>
        
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
        <!-- /page content -->

        

</body>
</html>
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
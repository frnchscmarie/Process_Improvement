<?php
//export.php
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM mr ORDER BY property_no DESC";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">
        <tr>
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

        </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
                    <tr>
                         <td>'.$row["Bank_Account_Type_Code"].'</td>
                         <td>'.["Bank_Account_Type_Name"].'</td>
                         <td>'.$row['property_no'].'</td>
                         <td>'.$row['employeeID'].'</td>
                         <td>'.$row['lname']'.'.$row['fname']'.'.$row['mname'].'</td>
                         <td>'.$row['date_assigned'].'</td>
                         <td>'.$row['qty'].'</td>
                         <td>'.$row['unit'].'</td>
                         <td>'.$row['property_name'].'</td>
                         <td>'.$row['description'].'</td>
                         <td>'.$row['date_purchased'].'</td>
                         <td>'.$row['classification_no'].'</td>
                         <td>'.$row['unit_value'].'</td>
                         <td>'.$row['total_value'].'</td>
                         <td>'.$row['mr_no'].'</td>
                         <td>'.$row['status'].'</td>

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
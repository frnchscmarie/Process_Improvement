<?php
//export.php
if(isset($_POST["export"]))
 {
      $connect = mysqli_connect("localhost", "root", "", "rbsd");  
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=data.csv');
      $output = fopen("php://output", "w");
      fputcsv($output, array('Property Number', 'Balance_Per_SL', 'Balance_Per_GL', 'Balance_Per_SL', 'Difference', 'GCMC_Name', 'GCMC_Number', 'GCMC_Amount', 'GCMC_Payee', 'GCMC_Payment_Name', 'Date_Issued', 'Currency_Name', 'Bank_Account_Type_Name', 'Account_No', 'Buyers_Name', 'Purpose_of_Buying', 'CTR_Reported_Date', 'Date_Cleared', 'Issued_By', 'Approved_By'));
      $query = "SELECT * from gcmc_reg_form ORDER BY GCMC_Number DESC";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_assoc($result))
      {
           fputcsv($output, $row);
      }
      fclose($output);
 }
}
?>
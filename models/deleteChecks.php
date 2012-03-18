<?php  
  include 'database.php';
query("DELETE FROM CHECKS 
    WHERE 
    Registration_Number = '$_POST[Registration_Number]' 
    AND 
    Test_Number = '$_POST[Test_Number]' 
    AND 
    Emp_Code = '$_POST[Emp_Code]'
    AND
    Check_ID = '$_POST[Check_ID]'
    " );
  Header ('Location: /~db/db-aviation/views/listChecks.php');
?>





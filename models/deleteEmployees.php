<?php  
  include 'database.php';
  query("DELETE FROM EMPLOYEES WHERE Emp_Code = '$_POST[Emp_Code]'" );
  Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>


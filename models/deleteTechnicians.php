<?php  
  include 'database.php';
  query("DELETE FROM TECHNICIANS WHERE Emp_Code = '$_POST[Emp_Code]'" );
  Header ('Location: /~db/db-aviation/views/listTechnicians.php');
?>



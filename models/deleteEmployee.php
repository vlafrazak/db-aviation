<?php  
  include 'database.php';
    echo $_POST['Emp_Code'];
  query("DELETE FROM EMPLOYEES WHERE Emp_Code = '$_POST[Emp_Code]'" );
  Header ('Location: ../views/listEmployees.php');
?>

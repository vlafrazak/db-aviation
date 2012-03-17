<?php  
  include 'database.php';
    echo $_POST['Registration_Number'];
  query("DELETE FROM CHECKS WHERE Registration_Number = '$_POST[Registration_Number]'" );
  Header ('Location: /~db/db-aviation/views/listChecks.php');
?>





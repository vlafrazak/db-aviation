<?php  
  include 'database.php';
  query("DELETE FROM AIR_TRAFFIC_CONTROLLERS WHERE Emp_Code = '$_POST[Emp_Code]'" );
  Header ('Location: /~db/db-aviation/views/listAirTrafficControllers.php');
?>




<?php  
  include 'database.php';
  query("DELETE FROM AIRCRAFT_FLEET WHERE Registration_Number = '$_POST[Registration_Number]'" );
  Header ('Location: /~db/db-aviation/views/listAircraftFleet.php');
?>




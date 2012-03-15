<?php  
  include 'database.php';
    echo $_POST['Registration_Number'];
  query("DELETE FROM AIRCRAFT_FLEET WHERE Registration_Number = '$_POST[Registration_Number]'" );
  Header ('Location: ../views/listAircraftFleet.php');
?>




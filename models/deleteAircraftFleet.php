<?php  
  include 'database.php';

  function deleteAircraftFleet ($delkey) {
      query("DELETE FROM AIRCRAFT_FLEET WHERE Emp_Code = '$delkey' )");
      Header ('Location: ../views/listAircraftFleet.php');
  }
?>




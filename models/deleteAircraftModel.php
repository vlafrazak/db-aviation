<?php  
  include 'database.php';
    echo $_POST['Model_Code'];
  query("DELETE FROM AIRCRAFT_MODEL WHERE Model_Code = '$_POST[Model_Code]'" );
  Header ('Location: /~db/db-aviation/views/listAircraftModel.php');
?>


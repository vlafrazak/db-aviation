<?php  
  include 'database.php';
  query(
    "INSERT INTO AIRCRAFT_MODEL (
      Model_Code,
      Model_Name,
      Capacity,
      Weight,
      Manufacturer
    )
    VALUES (
        $_POST[Model_Code],
        '$_POST[Model_Name]',
        $_POST[Capacity],
        $_POST[Weight],
        '$_POST[Manufacturer]'
    )");
   
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listAircraftModels.php');
?>



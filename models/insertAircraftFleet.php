<?php  
  include 'database.php';
  query(
    "INSERT INTO AIRCRAFT_FLEET (
      Registration_Number,
      Air_Carrier,
      Construction_Date,
      Model_Code
    )
    VALUES (
       $_POST[Registration_Number],
        '$_POST[Air_Carrier]',
        $_POST[Construction_Date],
        $_POST[Model_Code]
    )");
   
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listAircraftFleet.php');
?>

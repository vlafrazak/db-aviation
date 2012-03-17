<?php  
    include 'database.php';

    query( 
        "UPDATE
            AIRCRAFT_MODEL
         SET
            Model_Code=$_POST[Model_Code],
            Model_Name='$_POST[Model_Name]',
            Capacity=$_POST[Capacity],
            Weight=$_POST[Weight],
            Manufacturer='$_POST[Manufacturer]'
        WHERE 
            Model_Code='$_POST[Model_Code]'"
        );
    Header ('Location: /~db/db-aviation/views/listAircraftModels.php');
?>




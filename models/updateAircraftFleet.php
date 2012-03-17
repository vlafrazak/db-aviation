<?php  
    include 'database.php';

    query( 
        "UPDATE
            AIRCRAFT_FLEET
         SET
            Registration_Number=$_POST[Registration_Number],
            Air_Carrier='$_POST[Air_Carrier]',
            Construction_Date=$_POST[Construction_Date],
            Model_Code=$_POST[Model_Code]
        WHERE 
            Registration_Number='$_POST[Registration_Number]'"
        );
    Header ('Location: /~db/db-aviation/views/listAircraftFleet.php');
?>



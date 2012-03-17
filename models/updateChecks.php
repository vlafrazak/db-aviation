<?php  
    include 'database.php';

    query( 
        "UPDATE
            CHECKS
         SET
            Registration_Number=$_POST[Registration_Number],
            Test_Number=$_POST[Test_Number],
            Emp_Code=$_POST[Emp_Code],
            Check_ID=$_POST[Check_ID],
            Check_Duration=$_POST[Check_Duration],
            Check_Score=$_POST[Check_Score]
         WHERE 
            Registration_Number=$_POST[Registration_Number]"
    );
    Header ('Location: /~db/db-aviation/views/listChecks.php');
?>





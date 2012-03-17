<?php  
    include 'database.php';

    query( 
        "UPDATE
            TECHNICIANS
         SET
            Emp_Code=$_POST[Emp_Code],
            Rank=$_POST[Rank]
         WHERE 
            Emp_Code='$_POST[Emp_Code]'"
    );
    Header ('Location: /~db/db-aviation/views/listTechnicians.php');
?>



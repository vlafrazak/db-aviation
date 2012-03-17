<?php  
    include 'database.php';

    query( 
        "UPDATE
            AIR_TRAFFIC_CONTROLLERS
         SET
            Emp_Code=$_POST[Emp_Code],
            Last_Exam_Date='$_POST[Last_Exam_Date]',
            Exam_Result=$_POST[Exam_Result]
         WHERE 
            Emp_Code=$_POST[Emp_Code]"
    );
    Header ('Location: /~db/db-aviation/views/listAirTrafficControllers.php');
?>




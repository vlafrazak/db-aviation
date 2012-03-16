<?php  
    include 'database.php';

    $controllers = query_array( 
        "SELECT 
            e . * , atc.Last_Exam_Date, atc.Exam_Result
        FROM 
            EMPLOYEES e
        INNER JOIN 
            AIR_TRAFFIC_CONTROLLERS atc
        ON 
        (
            e.Emp_Code = atc.Emp_Code
        )"
    );
    if( !$controllers ) {
        die( mysql_error() );
    }
    return $controllers;    
?>


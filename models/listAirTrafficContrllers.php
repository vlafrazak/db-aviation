<?php  
    include 'database.php';

    $controllers = query_array( 
        "SELECT 
            e . * , m.E_mail, p.Phone_Number, atc.Last_Exam_Date, atc.Exam_Result
        FROM 
            EMPLOYEES e
        LEFT JOIN 
            E_MAILS m
        LEFT JOIN 
            PHONES p
        INNER JOIN 
            AIR_TRAFFIC_CONTROLLERS atc
        ON 
        (
            e.Emp_Code = p.Emp_Code
            AND e.Emp_Code = p.Emp_Code
            AND e.Emp_Code = atc.Emp_Code
        )"
    );
    if( !$controllers ) {
        die( mysql_error() );
    }
    return $controllers;    
?>


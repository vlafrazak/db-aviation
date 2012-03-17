<?php  
    include 'database.php';

    $employees = query_array ( 
        "SELECT 
            e . * , p.Phone_Number
        FROM 
            EMPLOYEES e
        LEFT JOIN 
        (
            PHONES p
        ) 
        ON 
        (
            e.Emp_Code = p.Emp_Code
        )"
    );

     $employees = query_array ( 
        "SELECT 
            e . * , m.E_mail
        FROM 
            EMPLOYEES e
        LEFT JOIN 
        (
            E_MAILS m
        ) 
        ON 
        (
            e.Emp_Code = m.Emp_Code
        )"
    );


    if( !$employees ) {
        die( mysql_error() );
    }
    return $employees;    
?>

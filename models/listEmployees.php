<?php  
    include 'database.php';

    $employees = query_array( 
        "SELECT 
            e . * , m.E_mail, p.Phone_Number
        FROM 
            EMPLOYEES e
        LEFT JOIN 
        (
            E_MAILS m, PHONES p
        ) 
        ON 
        (
            e.Emp_Code = p.Emp_Code
            AND e.Emp_Code = p.Emp_Code
        )"
        );
    if( !$employees ) {
        die( mysql_error() );
    }
    return $employees;    
?>

<?php  
    include 'database.php';

    $techs = query_array( 
        "SELECT 
            e . * , m.E_mail, p.Phone_Number, t.Rank
        FROM 
            EMPLOYEES e
        INNER JOIN 
            TECHNICIANS t
        INNER JOIN 
            E_MAILS m
        INNER JOIN 
            PHONES p
        ON 
        (
            e.Emp_Code = p.Emp_Code
            AND e.Emp_Code = p.Emp_Code
            AND e.Emp_Code = t.Emp_Code
        )"
        );
    if( !$techs ) {
        die( mysql_error() );
    }
    return $techs;    
?>


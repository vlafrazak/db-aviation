<?php  
include 'database.php';

    $techs = query_array( 
        "SELECT e.*, t.Rank, m.E_mail, p.Phone_Number
        FROM 
            EMPLOYEES e
        INNER JOIN 
            TECHNICIANS t
        ON 
            e.Emp_Code = t.Emp_Code
        LEFT JOIN
            E_MAILS m
        ON 
            m.Emp_Code = e.Emp_Code
        LEFT JOIN
            PHONES p
        ON
            p.Emp_Code = e.Emp_Code"
    );
    if( !$techs ) {
        die( mysql_error() );
    }
    return $techs;    
?>

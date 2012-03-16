<?php  
    include 'database.php';

    $techs = query_array( 
        "SELECT 
            e . *,  t.Rank
        FROM 
            EMPLOYEES e, TECHNICIANS t
        WHERE
            e.Emp_Code = t.Emp_Code
        "
        );
    if( !$techs ) {
        die( mysql_error() );
    }
    return $techs;    
?>


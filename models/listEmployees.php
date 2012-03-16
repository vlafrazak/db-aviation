<?php  
    include 'database.php';

    $employees = query_array( 
        "SELECT *
            FROM
            EMPLOYEES"
        );
    if( !$employees ) {
        die( mysql_error() );
    }
    return $employees;    
?>

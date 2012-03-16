<?php  
    include 'database.php';

    $controllers = query_array( 
        "SELECT 
            *
        FROM 
            EMPLOYEES e, AIR_TRAFFIC_CONTROLLERS atc
        WHERE
            e.Emp_Code = atc.Emp_Code"
            
    );
    if( !$controllers ) {
        die( mysql_error() );
    }
    return $controllers;    
?>


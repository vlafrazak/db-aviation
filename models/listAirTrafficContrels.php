<?php  
    include 'database.php';

    $controllers = query_array( 
        "SELECT *
            FROM
            AIR_TRAFFIC_CONTROLLERS)"
        );
    if( !$controllers ) {
        die( mysql_error() );
    }
    return $controllers;    
?>


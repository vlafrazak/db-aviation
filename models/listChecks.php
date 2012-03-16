<?php  
    include 'database.php';

    $checks = query_array( 
        "SELECT *
            FROM
            CHECKS"
        );
    if( !$checks ) {
        die( mysql_error() );
    }
    return $checks;    
?>


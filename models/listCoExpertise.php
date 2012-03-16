<?php  
    include 'database.php';

    $coexpert = query_array( 
        "SELECT *
            FROM
            CO_EXPERTISE"
        );
    if( !$coexpert ) {
        die( mysql_error() );
    }
    return $coexpert;    
?>


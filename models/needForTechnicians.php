<?php  
    include 'database.php';

    $hrs = query_array( 
        "SELECT *
            FROM
            hr"
        );
    if( !$hrs ) {
        die( mysql_error() );
    }
    return $hrs;    
?>



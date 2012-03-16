<?php  
    include 'database.php';

    $phones = query_array( 
        "SELECT *
            FROM
            PHONES"
        );
    if( !$phones ) {
        die( mysql_error() );
    }
    return $phones;    
?>


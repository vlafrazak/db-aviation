<?php  
    include 'database.php';

    $mails = query_array( 
        "SELECT *
            FROM
            E_MAILS"
        );
    if( !$mails ) {
        die( mysql_error() );
    }
    return $mails;    
?>



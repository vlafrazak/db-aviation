<?php  
    include 'database.php';

    $techs = query( 
        "SELECT *
        FROM 
            TECHNICIANS
    ");
    if( !$techs ) {
        die( mysql_error() );
    }

?>

<?php  
    include 'database.php';

    $techs = query_array( 
        "SELECT *
            FROM
            TECHNICIANS"
        );
    if( !$techs ) {
        die( mysql_error() );
    }
    return $techs;    
?>


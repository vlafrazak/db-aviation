<?php  
    include 'database.php';

    $fleet = query_array( 
        "SELECT *
            FROM
            AIRCRAFT_FLEET"
        );
    if( !$fleet ) {
        die( mysql_error() );
    }
    return $fleet;    
?>


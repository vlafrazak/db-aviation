<?php  
    include 'database.php';

    $fleet = query_array( 
        "SELECT *
            FROM
            AIRCRAFT_FLEET
            ORDER BY
            Air_Carrier"
        );
    if( !$fleet ) {
        die( mysql_error() );
    }
    return $fleet;    
?>


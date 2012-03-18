<?php  
    include 'database.php';

    $fleet = query_array( 
        "SELECT *
            FROM
            AIRCRAFT_FLEET
            GROUP BY
            Model_Code"
        );
    if( !$fleet ) {
        die( mysql_error() );
    }
    return $fleet;    
?>


<?php  
    include 'database.php';

    $models = query_array( 
        "SELECT *
            FROM
            AIRCRAFT_MODEL"
        );
    if( !$models ) {
        die( mysql_error() );
    }
    return $models;    
?>


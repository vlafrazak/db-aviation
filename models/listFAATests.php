<?php  
    include 'database.php';

    $test = query_array( 
        "SELECT *
            FROM
            FAA_TEST"
        );
    if( !$test ) {
        die( mysql_error() );
    }
    return $test;    
?>


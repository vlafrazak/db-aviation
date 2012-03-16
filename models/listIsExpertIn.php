<?php  
    include 'database.php';

    $expert = query_array( 
        "SELECT *
            FROM
            IS_EXPERT_IN"
        );
    if( !$expert ) {
        die( mysql_error() );
    }
    return $expert;    
?>


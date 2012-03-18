<?php  
    include "database.php";

    $checks = query_array( 
        "SELECT 
            c.*,f.Test_Name,f.Max_Score
        FROM
            CHECKS c
        INNER JOIN
            FAA_TEST f
        ON
            c.Test_Number = f.Test_Number"
        );
    if( !$checks ) {
        die( mysql_error() );
    }
    return $checks;    
?>


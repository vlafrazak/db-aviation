<?php  
    include "database.php";
    if( !isset($_GET[ 'Registration_Number' ])) {
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

    }
    else {
        $checks = query_array( 
            "SELECT 
                c.*,f.Test_Name,f.Max_Score
            FROM
                CHECKS c
            INNER JOIN
                FAA_TEST f
            ON
                c.Test_Number = f.Test_Number
            WHERE
                c.Registration_Number = '" . $_GET[ 'Registration_Number' ] . "'"
            );
        if( !$checks ) {
            die( mysql_error() );
        }
        return $checks;    
    }
?>


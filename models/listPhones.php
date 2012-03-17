<?php  
    include 'database.php';

    function listPhones( $Emp_Code ) {
        $phones = query_array(
                "SELECT p.Phone_number
                FROM
                    PHONES p
                WHERE
                    p.Emp_Code = " . $Emp_Code
            );
        if( !$phones ) {
            die( mysql_error() );
        }
        return $phones;    
    }
?>


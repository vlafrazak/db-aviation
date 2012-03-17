<?php  
    include 'database.php';

    function listEmails( $Emp_Code ) {
        $mails = query_array( 
            "SELECT *
                FROM
            E_MAILS
                WHERE
                Emp_Code = " . $Emp_Code
        );
        if( !$mails ) {
            die( mysql_error() );
        }
        return $mails;    
    }
?>



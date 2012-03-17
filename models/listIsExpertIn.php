<?php  
    include 'database.php';

    function isExpertIn( $Model_Code ) {
        $experts = query_array( 
            "SELECT e . * , ex.Degree_of_Experience
            FROM EMPLOYEES e
            INNER JOIN IS_EXPERT_IN ex 
            ON
            (
                e.Emp_Code = ex.Emp_Code
                AND ex.Model_Code = " . $Model_Code .
            ")
            ORDER BY
                Degree_of_Experience DESC
                "
            );
        if( !$experts ) {
            die( mysql_error() );
        }
        $answer = array();
        foreach( $experts as $expert) {
            $expert[ 'mails' ] = query_array( 
            "SELECT e.E_mail
                FROM
            E_MAILS e
                WHERE
                e.Emp_Code = " . $expert[ 'Emp_Code' ] );
            $expert[ 'phones' ] = query_array(
                "SELECT p.Phone_number
                FROM
                    PHONES p
                WHERE
                    p.Emp_Code = " . $expert[ 'Emp_Code' ] );
            $answer[] = $expert;
        }
        return $answer;    

    }


?>


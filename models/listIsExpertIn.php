<?php  
    include 'database.php';
    include 'listEmails.php';
    include 'listPhones.php';

    function isExpertIn( $Model_Code ) {
        $expert = query_array( 
            "SELECT e . * , ex.Degree_of_Experience, p.Phone_Number, m.E_mail
            FROM expertS e
            INNER JOIN IS_EXPERT_IN ex 
            ON
            (
                e.Emp_Code = ex.Emp_Code
                AND ex.Model_Code = " . $Model_Code .
            ")"
            );
        if( !$expert ) {
            die( mysql_error() );
        }
        $answer = array();
        foreach( $experts as $expert) {
            $expert[ 'mails' ] = listEmails( $expert[ 'Emp_Code' ] );
            $expert[ 'phones' ] = listPhones( $expert[ 'Emp_Code' ] );
            $answer[] = $expert;
        }
        return $expert;    

    }


?>


<?php  
    include 'database.php';
    function isExpertIn( $Model_Code ) {
        $expert = query_array( 
            "SELECT e . * , ex.Degree_of_Experience, p.Phone_Number, m.E_mail
            FROM EMPLOYEES e
            INNER JOIN IS_EXPERT_IN ex ON
            (
                e.Emp_Code = ex.Emp_Code
                AND ex.Model_Code = " . $Model_Code .
            ")
            LEFT JOIN PHONES p ON p.Emp_Code = e.Emp_Code
            LEFT JOIN E_MAILS m ON m.Emp_Code = e.Emp_Code
            ORDER BY Degree_of_Experience DESC"
            );
        if( !$expert ) {
            die( mysql_error() );
        }
        return $expert;    
            
    }


?>


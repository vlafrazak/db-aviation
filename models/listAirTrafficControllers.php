<?php  
    include 'database.php';
    include 'listEmails.php';
    include 'listPhones.php';

    $controllers = query_array( 
        "SELECT e.*, c.Last_Exam_Date, c.Exam_Result
        FROM 
            EMPLOYEES e
        INNER JOIN 
            AIR_TRAFFIC_CONTROLLERS c
        ON 
            e.Emp_Code = c.Emp_Code"
    );
    if( !$controllers ) {
        die( mysql_error() );
    }
    
    $answer = array();
    foreach( $controllers as $controller) {
        $controller[ 'mails' ] = query_array( 
            "SELECT e.E_mail
                FROM
            E_MAILS e
                WHERE
                e.Emp_Code = " . $controller[ 'Emp_Code' ] );
        $controller[ 'phones' ] = query_array(
                "SELECT p.Phone_number
                FROM
                    PHONES p
                WHERE
                    p.Emp_Code = " . $controller[ 'Emp_Code' ] );
        $answer[] = $controller;
    }
    return $answer;    
?>


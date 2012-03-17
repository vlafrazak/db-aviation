<?php  
    include 'database.php';

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
        $mails = query_array(
            "SELECT m.E_mail
            FROM
                E_MAILS m
            WHERE
                m.Emp_Code = " . $controller[ 'Emp_Code' ]
        );
        $phones = query_array(
            "SELECT p.Phone_number
            FROM
                PHONES p
            WHERE
                p.Emp_Code = " . $controller[ 'Emp_Code' ]
        );
        $controller[ 'mails' ] = $mails;
        $controller[ 'phones' ] = $phones;
        $answer[] = $controller;
    }
    return $answer;    
?>


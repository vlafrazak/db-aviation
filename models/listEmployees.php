<?php  
    include 'database.php';

    $employees = query_array ( 
        "SELECT 
            e . * 
        FROM 
            EMPLOYEES e"
    );

    if( !$employees ) {
        die( mysql_error() );
    }

    $answer = array();
    foreach( $employees as $employee) {
        $mails = query_array(
            "SELECT m.E_mail
            FROM
                E_MAILS m
            WHERE
                m.Emp_Code = " . $employee[ 'Emp_Code' ]
        );
        $phones = query_array(
            "SELECT p.Phone_number
            FROM
                PHONES p
            WHERE
                p.Emp_Code = " . $employee[ 'Emp_Code' ]
        );
        $employee[ 'mails' ] = $mails;
        $employee[ 'phones' ] = $phones;
        $answer[] = $employee;
    }
    return $answer;    
?>

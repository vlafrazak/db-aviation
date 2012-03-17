<?php  
include 'database.php';

    $techs = query_array( 
        "SELECT e.*, t.Rank, m.E_mail, p.Phone_Number
        FROM 
            EMPLOYEES e
        INNER JOIN 
            TECHNICIANS t
        ON 
            e.Emp_Code = t.Emp_Code"
    );
    if( !$techs ) {
        die( mysql_error() );
    }

    $answer = array()
    foreach( $techs as $tech) {
        $mails = query_array(
            "SELECT m.E_mail
            FROM
                EMAILS m
            WHERE
                m.Emp_Code = " . $tech[ 'Emp_Code' ];
        );
        $phones = query_array(
            "SELECT p.Phone_number
            FROM
                PHONES p
            WHERE
                p.Emp_Code = " . $tech[ 'Emp_Code' ];
        );
        $tech[ 'mails' ] = $mails;
        $tech[ 'phones' ] = $phones;
        $answer[] = $tech;
    }
    return $answer;    
?>

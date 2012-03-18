<?php  
    include_once 'database.php';

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
        $employee[ 'mails' ] = query_array( 
            "SELECT e.E_mail
                FROM
            E_MAILS e
                WHERE
                e.Emp_Code = " . $employee[ 'Emp_Code' ] );
        $employee[ 'phones' ] = query_array(
                "SELECT p.Phone_number
                FROM
                    PHONES p
                WHERE
                    p.Emp_Code = " . $employee[ 'Emp_Code' ] );
        $employee[ 'occ' ] = query_array(
            "SELECT t.Emp_Code
            FROM
                TECHNICIANS t
            WHERE
                t.Emp_Code = " . $employee[ 'Emp_Code' ]
        );
        $answer[] = $employee;
    }
    return $answer;    
?>

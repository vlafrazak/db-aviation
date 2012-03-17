<?php  
    include 'database.php';
    include 'listEmails.php';
    include 'listPhones.php';

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
        $employee[ 'mails' ] = listEmails( $employee[ 'Emp_Code' ] );
        $employee[ 'phones' ] = listPhones( $employee[ 'Emp_Code' ] );
        $answer[] = $employee;
    }
    return $answer;    
?>

<?php  
    include 'database.php';
    include 'listEmails.php';
    include 'listPhones.php';

    $techs = query_array( 
        "SELECT e.*, t.Rank
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

    $answer = array();
    foreach( $techs as $tech) {
        $tech[ 'mails' ] = listEmails( $employee[ 'Emp_Code' ] );
        $tech[ 'phones' ] = listPhones( $employee[ 'Emp_Code' ] );
        $answer[] = $tech;
    }
    return $answer;    
?>

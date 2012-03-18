<?php  
    include 'database.php';
    include 'listEmails.php';
    include 'listPhones.php';
    include 'listIsExpertIn.php';

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
        $tech[ 'mails' ] = query_array( 
            "SELECT e.E_mail
                FROM
            E_MAILS e
                WHERE
                e.Emp_Code = " . $tech[ 'Emp_Code' ] );
        $tech[ 'phones' ] = query_array(
                "SELECT p.Phone_number
                FROM
                    PHONES p
                WHERE
                    p.Emp_Code = " . $tech[ 'Emp_Code' ] );
        $tech[ 'expertise' ] = query_array(
                "SELECT x.Model_Code, x.Degree_of_Expreriance
                FROM
                    IS_EXPERT_IN x
                WHERE
                    x.Emp_Code = " . $tech[ 'Emp_Code' ] );
        $answer[] = $tech;
    }
    return $answer;    
?>

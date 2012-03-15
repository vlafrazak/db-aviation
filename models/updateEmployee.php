<?php  
    include 'database.php';

    $employee = query_row( 
        "SELECT *
            FROM
            EMPLOYEES
            WHERE Emp_Code='$_POST[Emp_Code]'"
        );
    echo '$_POST[Emp_Code]';
    if( !$employee ) {
        die( mysql_error() );
    }
    return $employee;    
?>


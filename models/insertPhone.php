<?php  
  include 'database.php';
query( 
    "INSERT INTO PHONES (
        Emp_Code,
        Phone_Number
    )
    VALUES (
        $_POST[Emp_Code],
        $_POST[Phone_Number]
    )");

    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>


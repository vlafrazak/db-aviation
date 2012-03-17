<?php  
  include 'database.php';
  query(
    "INSERT INTO EMPLOYEES (
        Emp_Code,
        SSN,
        Union_Membership_Number,
        First_Name,
        Surname,
        Street_Name,
        Street_Number,
        Postal_Code,
        Year_of_Birth,
        Salary,
        Rank
    )
    VALUES (
        $_POST[Emp_Code],
        $_POST[SSN],
        $_POST[Union_Membership_Number],
        '$_POST[First_Name]', 
        '$_POST[Surname]',
        '$_POST[Street_Name]',
        $_POST[Street_Number],
        $_POST[Postal_Code],
        $_POST[Year_of_Birth],
        $_POST[Salary],
        $_POST[Rank]
    )");
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listTechnicians.php');
?>


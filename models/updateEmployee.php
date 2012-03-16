<?php  
    include 'database.php';

    query( 
        "UPDATE
            EMPLOYEES
         SET
            SSN='$_POST[SSN]',
            Union_Membership_Number='$_POST[Union_Membership_Number]',
            First_Name='$_POST[First_Name]',
            Surname='$_POST[Surname]',
            Street_Name='$_POST[Street_Name]',
            Street_Number='$_POST[Street_Number]',
            Postal_Code='$_POST[Postal_Code]',
            Year_of_Birth='$_POST[Year_of_Birth]',
            Salary='$_POST[Salary]'
         WHERE Emp_Code='$_POST[Emp_Code]'"
        );
    Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>


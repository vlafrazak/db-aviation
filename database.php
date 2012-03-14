<?php
function query_array($query) {
    Print "query_array<br>";    
    $result = mysql_query($query) or die(mysql_error());

    Print "<table border cellpadding=3>"; 
    while($row = mysql_fetch_array( $result )) { 
        Print "<tr>"; 
        Print "<th>Emp_Code:</th> <td>".$row['Emp_Code'] . "</td> "; 
        Print "<th>SSN:</th> <td>".$row['SSN'] . "</td> "; 
        Print "<th>Union_Membership_Number:</th> <td>".$row['Union_Membership_Number'] . "</td> "; 
        Print "<th>Surname:</th> <td>".$row['Surname'] . " </td>"; 
        Print "<th>Street_Name:</th> <td>".$row['Street_Name'] . "</td> "; 
        Print "<th>Street_Number:</th> <td>".$row['Street_Number'] . "</td> "; 
        Print "<th>Postal_Code:</th> <td>".$row['Postal_Code'] . "</td> "; 
        Print "<th>Year_of_Birth:</th> <td>".$row['Year_of_Birth'] . "</td> "; 
        Print "<th>Salary:</th> <td>".$row['Salary'] . "</td> </tr>"; 
    } 
    Print "</table>"; 
    mysql_free_result($result);
}

function insert
mysql_query("INSERT INTO `aviation`.`EMPLOYEES` (
    `Emp_Code` ,
    `SSN` ,
    `First_Name` ,
    `Surname` ,
    `Street_Name` ,
    `Street_Number` ,
    `Postal_Code` ,
    `Year_of_Birth` ,
    `Salary`
)
VALUES (
    '03108137', '333', 'Iren', 'Vlassi', 'Petridou', '23', '77305', '1968', '40020'
)");



mysql_free_result($result);
?>

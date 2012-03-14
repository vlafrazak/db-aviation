<?php
function query_array($query) {
    Print "query_array<br>";    
    $result = mysql_query($query) or die(mysql_error());

    Print "<table border cellpadding=3>"; 
    while($row = mysql_fetch_array( $result )) 
    { 
        Print "<tr>"; 
        Print "<th>SSN:</th> <td>".$row['SSN'] . "</td> "; 
        Print "<th>Surname:</th> <td>".$row['Surname'] . " </td></tr>"; 
    } 
    Print "</table>"; 
    mysql_free_result($result);
}

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


function query_ins($query) {
    $sql=("INSERT INTO EMPLOYEES (
        `Emp_Code`,
        `SSN`,
        `Union_Membership_Number`,
        `First_Name`,
        `Surname`,
        `Street_Name`,
        `Street_Number`,
        `Postal_Code`,
        `Year_of_Birth`,
        `Salary`
    )
    VALUES(
        '$_POST[Emp_Code]',
        '$_POST[SSN]',
        '$_POST[Union_Membership_Number]',
        '$_POST[First_Name]', 
        '$_POST[Surname]',
        '$_POST[Street_Name]',
        '$_POST[Street_Number]',
        '$_POST[Postal_Code]',
        '$_POST[Year_of_Birth]',
        '$_POST[Salary]'
    )");

if (!mysql_query($sql,$con))
      {
            die('Error: ' . mysql_error());
              }
echo "1 record added";

//    echo "$row[1]<br>";  
//    echo "$row[2]<br>";  
}

mysql_free_result($result);
?>

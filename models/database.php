<?php
function query_array($query) {
    Print "query_array<br>";    
    $result = mysql_query($query) or die(mysql_error());

    echo"<Employees>
        <tr>
        </tr>";
    
    while($row = mysql_fetch_array($result))
          {
                echo "<tr>";
                  echo "<td>" . $row['FirstName'] . "</td>";
                  echo "<td>" . $row['LastName'] . "</td>";
                    echo "</tr>";
                    }
    echo "</table>";
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
?>

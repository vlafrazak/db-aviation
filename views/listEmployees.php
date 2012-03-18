<?php
    include "../header.php";
?>

<h2>Employees</h2>

<h4 id = "insert"><th><a href="/~db/db-aviation/views/createEmployees">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Emp Code</th>
<th>SSN</th>
<th>UMN</th>
<th>First Name</th>
<th>Surname</th>
<th>Street Name</th>
<th>Street Number</th>
<th>Postal Code</th>
<th>Year of Birth</th>
<th>Salary</th>
<th>E-mail</th>
<th>Phone</th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>

<?php
    $employees = include "../models/listEmployees.php";

    foreach( $employees as $employee ) {
        echo "\n<tr>";
        
        echo "<td>" .  $employee[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $employee[ 'SSN' ] . "</td>";
        echo "<td>" .  $employee[ 'Union_Membership_Number' ] . "</td>";
        echo "<td>" .  $employee[ 'First_Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Surname' ] . "</td>";
        echo "<td>" .  $employee[ 'Street_Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Street_Number' ] . "</td>";
        echo "<td>" .  $employee[ 'Postal_Code' ] . "</td>";
        echo "<td>" .  $employee[ 'Year_of_Birth' ] . "</td>";
        echo "<td>" .  $employee[ 'Salary' ] . "</td>";
        echo "<td class='emails'>";
        echo "<a class='button' href='/~db/db-aviation/views/createEmail.php?Emp_Code=" . $employee[ 'Emp_Code' ] .
                                                            "&First_Name=" . $employee[ 'First_Name' ] .
                                                            "&Surname=" . $employee[ 'Surname' ] .
                                                            "'>+</a><table class='noframe'>";
        foreach( $employee['mails'] as $mail ) {
            echo "<tr><td class='noframe'><a href='mailto:" .  $mail[0]  . "'>" . $mail[0] . "</a></td><td class='noframe'><a class='button' href='/~db/db-aviation/models/deleteEmail.php?E_mail=". $mail[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
       
        echo "<td class='phones'>";
        echo "<a class='button' href='/~db/db-aviation/views/createPhone.php?Emp_Code=" . $employee[ 'Emp_Code' ] .
                                                            "&First_Name=" . $employee[ 'First_Name' ] .
                                                            "&Surname=" . $employee[ 'Surname' ] .
                                                            "'>+</a><ul>";
        echo "<table class='noframe'>";
        foreach( $employee['phones'] as $phone ) {
            echo "<tr><td class='noframe'> $phone[0] </td> <td class='noframe'><a class='button' href='/~db/db-aviation/models/deletePhone.php?Phone=". $phone[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
          
        echo "<td><form action='/~db/db-aviation/views/updateEmployees.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='SSN' value=" . $employee[ 'SSN' ] . "/>";
        echo "<input type='hidden' name='Union_Membership_Number' value=" . $employee[ 'Union_Membership_Number' ] . "/>";
        echo "<input type='hidden' name='First_Name' value=" . $employee[ 'First_Name' ] . "/>";
        echo "<input type='hidden' name='Surname' value=" . $employee[ 'Surname' ] . "/>";
        echo "<input type='hidden' name='Street_Name' value=" . $employee[ 'Street_Name' ] . "/>";
        echo "<input type='hidden' name='Street_Number' value=" . $employee[ 'Street_Number' ] . "/>";
        echo "<input type='hidden' name='Postal_Code' value=" . $employee[ 'Postal_Code' ] . "/>";
        echo "<input type='hidden' name='Year_of_Birth' value=" . $employee[ 'Year_of_Birth' ] . "/>";
        echo "<input type='hidden' name='Salary' value=" . $employee[ 'Salary' ] . "/>";
        echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";
        
        echo "<td><form action='/~db/db-aviation/views/createTechnicians.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input class = 'button' type='submit' value='Technician' title='Κάνε αυτόν τον υπάλληλο τεχνικό.'/>";
        echo "</form></td>";

        echo "<td><form action='/~db/db-aviation/views/createAirTrafficControllers.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input class = 'button' type='submit' value='Controller' title='Κάνε αυτόν τον υπάλληλο ελεγκτή.'/>";
        echo "</form></td>";

        echo "<td><form action='/~db/db-aviation/models/deleteEmployees.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    }

?>
</table>



<?php
    include "../footer.php";
?>

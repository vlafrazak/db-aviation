<?php
    include "../header.php";
?>

<h2>Technicians</h2>
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
<th>Rank</th>
<th></th>
<th></th>
</tr>

<?php
    $techs = include "../models/listTechnicians.php";

    foreach( $techs as $tech ) {
        echo "\n<tr>";
        
        echo "<td>" .  $tech[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $tech[ 'SSN' ] . "</td>";
        echo "<td>" .  $tech[ 'Union_Membership_Number' ] . "</td>";
        echo "<td>" .  $tech[ 'First_Name' ] . "</td>";
        echo "<td>" .  $tech[ 'Surname' ] . "</td>";
        echo "<td>" .  $tech[ 'Street_Name' ] . "</td>";
        echo "<td>" .  $tech[ 'Street_Number' ] . "</td>";
        echo "<td>" .  $tech[ 'Postal_Code' ] . "</td>";
        echo "<td>" .  $tech[ 'Year_of_Birth' ] . "</td>";
        echo "<td>" .  $tech[ 'Salary' ] . "</td>";

        echo "<td class='emails'>";
        echo "<a class='button' href='/~db/db-aviation/views/createEmail.php?Emp_Code=" . $tech[ 'Emp_Code' ] .
                                                            "&First_Name=" . $tech[ 'First_Name' ] .
                                                            "&Surname=" . $tech[ 'Surname' ] .
                                                            "'>+</a><table class='noframe'>";
        foreach( $tech['mails'] as $mail ) {
            echo "<tr><td class='noframe'><a href='mailto:" .  $mail[0]  . "'>" . $mail[0] . "</a></td><td class='noframe'><a class='button' href='/~db/db-aviation/models/deleteEmail.php?E_mail=". $mail[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
        
        echo "<td class='phones'>";
        echo "<a class='button' href='/~db/db-aviation/views/createPhone.php?Emp_Code=" . $tech[ 'Emp_Code' ] .
                                                            "&First_Name=" . $tech[ 'First_Name' ] .
                                                            "&Surname=" . $tech[ 'Surname' ] .
                                                            "'>+</a><ul>";
        echo "<table class='noframe'>";
        foreach( $tech['phones'] as $phone ) {
            echo "<tr><td class='noframe'> $phone[0] </td> <td class='noframe'><a class='button' href='/~db/db-aviation/models/deletePhone.php?Phone=". $phone[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
       
        echo "<td>" .  $tech[ 'Rank' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/views/updateTechnicians.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $tech[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='Rank' value=" . $tech[ 'Rank' ] . "/>";
        echo "<input type='submit' value='Edit Rank' title='Επεξεργασία Βαθμίδας'/>";
        echo "</form></td>";
        
        echo "<td><form action='/~db/db-aviation/models/deleteEmployees.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $tech[ 'Emp_Code' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    
    }
?>
</table>

<?php
    include "../footer.php";
?>

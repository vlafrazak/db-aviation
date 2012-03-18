<?php
    include "../header.php";
?>

<h2>Air Traffic Controllers</h2>
<table id="playlist" class="even">
<tr>
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
<th>Last Exam Date</th>
<th>Exam Result</th>
<th></th>
<th></th>
</tr>

<?php
    $controllers = include "../models/listAirTrafficControllers.php";

    foreach( $controllers as $controller ) {
        echo "\n<tr>";
        
        echo "<td>" .  $controller[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $controller[ 'SSN' ] . "</td>";
        echo "<td>" .  $controller[ 'Union_Membership_Number' ] . "</td>";
        echo "<td>" .  $controller[ 'First_Name' ] . "</td>";
        echo "<td>" .  $controller[ 'Surname' ] . "</td>";
        echo "<td>" .  $controller[ 'Street_Name' ] . "</td>";
        echo "<td>" .  $controller[ 'Street_Number' ] . "</td>";
        echo "<td>" .  $controller[ 'Postal_Code' ] . "</td>";
        echo "<td>" .  $controller[ 'Year_of_Birth' ] . "</td>";
        echo "<td>" .  $controller[ 'Salary' ] . "</td>";

        echo "<td class='emails'>";
        echo "<table class='noframe'><tr><td class='noframe'></td><td class='noframe'><a class='button' href='/~db/db-aviation/views/createEmail.php?Emp_Code=" . $controller[ 'Emp_Code' ] .
                                                            "&First_Name=" . $controller[ 'First_Name' ] .
                                                            "&Surname=" . $controller[ 'Surname' ] .
                                                            "'>+</a></td></tr>";
        foreach( $controller['mails'] as $mail ) {
            echo "<tr><td class='noframe'><a class='emails' href='mailto:" .  $mail[0]  . "'>" . $mail[0] . "</a></td><td class='noframe'><a class='button' href='/~db/db-aviation/models/deleteEmail.php?E_mail=". $mail[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
        
        echo "<td class='phones'>";
        echo "<table class='noframe'><tr><td class='noframe'></td><td class='noframe'><a class='button' href='/~db/db-aviation/views/createPhone.php?Emp_Code=" . $controller[ 'Emp_Code' ] .
                                                            "&First_Name=" . $controller[ 'First_Name' ] .
                                                            "&Surname=" . $controller[ 'Surname' ] .
                                                            "'>+</a></td></tr>";
        foreach( $controller['phones'] as $phone ) {
            echo "<tr><td class='noframe'> $phone[0] </td> <td class='noframe'><a class='button' href='/~db/db-aviation/models/deletePhone.php?Phone=". $phone[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
    
       
     
        echo "<td>" .  $controller[ 'Last_Exam_Date' ] . "</td>";
        echo "<td>" .  $controller[ 'Exam_Result' ] . "</td>";
       
        echo "<td><form action='/~db/db-aviation/views/updateAirTrafficControllers.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $controller[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='Last_Exam_Date' value=" . $controller[ 'Last_Exam_Date' ] . "/>";
        echo "<input type='hidden' name='Exam_Result' value=" . $controller[ 'Exam_Result' ] . "/>";
        echo "<input type='submit' value='Edit Exam' title='Επεξεργασία Εξέτασης'/>";
        echo "</form></td>";

        echo "<td><form action='/~db/db-aviation/models/deleteEmployees.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $controller[ 'Emp_Code' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    }

?>
</table>


<?php
    include "../footer.php";
?>

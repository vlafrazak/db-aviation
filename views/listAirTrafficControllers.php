<?php
    include "../header.php";
?>

<h2>Air Traffic Controllers</h2>
<table id="playlist" class="odd">
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
    
        echo "<td>";
        echo "<ul>";
        foreach( $controller['mails'] as $mail ) {
            echo "<li><a href='mailto:" .  $mail[0]  . "'>" . $mail[0] . "</a></li>";
        }
        echo "</ul>";
        echo "</td>";
        
        echo "<td>";
        echo "<ul>";
        foreach( $controller['phones'] as $phone ) {
            echo "<li> $phone[0] </li>";
        }
        echo "</ul>";
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

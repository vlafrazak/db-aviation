<?php
    include "../header.php";
?>

<h2>Air Traffic Controllers</h2>
<table>
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
<th>e-mail</th>
<th>Phone</th>
<th>Last Exam Date</th>
<th>Exam Result</th>
</tr>

<?php
    $employees = include "../models/listAirTrafficControllers.php";

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
        echo "<td><a href='mailto:" .  $employee[ 'E_mail' ] . "'>" . $employee[ 'E_mail' ] . "</a></td>";
        echo "<td>" .  $employee[ 'Phone_Number' ] . "</td>";
        echo "<td>" .  $employee[ 'Last_Exam_Date' ] . "</td>";
        echo "<td>" .  $employee[ 'Exam_Result' ] . "</td>";
       
        echo "<td><form action='/~db/db-aviation/views/updateAircraftControllers.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='Last_Exam_Date' value=" . $employee[ 'Laste_Exam_Date' ] . "/>";
        echo "<input type='hidden' name='Exam_Result' value=" . $employee[ 'Exam_Result' ] . "/>";
        echo "<input type='submit' value='Edit Exam' title='Επεξεργασία Εξέτασης'/>";
        echo "</form></td>";

        echo "<td><form action='/~db/db-aviation/models/deleteEmployee.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    }

?>
</table>


<?php
    include "../footer.php";
?>

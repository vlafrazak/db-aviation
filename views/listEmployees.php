<?php
    include "../header.php";
?>


<table border = "1" >
<tr>
<th>Emp_Code</th>
<th>SSN</th>
<th>Union_Membership_Number</th>
<th>First_Name</th>
<th>Surname</th>
<th>Street_Name</th>
<th>Street_Number</th>
<th>Postal_Code</th>
<th>Year_of_Birth</th>
<th>Salary</th>
</tr>

<?php
    $employees = include "../models/listEmployee.php";

    foreach( $employees as $employee ) {
        echo "<tr>";
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
        echo "<form action="../models/deleteEmployee.php" method="post">";
            echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
            echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form>";

        echo "</tr>";
    }

?>
</table>
<?php
    include "../footer.php";
?>

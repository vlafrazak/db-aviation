<?php
    include "../header.php";
?>


<h2>Checks</h2>

<h4><th><a id='insert' href="/~db/db-aviation/views/createChecks">INSERT</a></th></h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Registration Number</th> 
<th>Test Number</th> 
<th>Emp Code</th> 
<th>Check ID</th> 
<th>Check Duration</th>
<th>Check Score</th>
<th> </th>
</tr>

<?php
    $checks = include "../models/listChecks.php";

    foreach( $checks as $check ) {
        echo "<tr>";

        echo "<td>" .  $check[ 'Registration_Number' ] . "</td>";
        echo "<td>" .  $check[ 'Test_Number' ] . "</td>";
        echo "<td>" .  $check[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $check[ 'Check_ID' ] . "</td>";
        echo "<td>" .  $check[ 'Check_Duration' ] . "</td>";
        echo "<td>" .  $check[ 'Check_Score' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/models/deleteChecks.php' method='post'>";
        echo "<input type='hidden' name='Registration_Number' value=" . $check[ 'Registration_Number' ] . "/>";
        echo "<input type='hidden' name='Test_Number' value=" . $check[ 'Test_Number' ] . "/>";
        echo "<input type='hidden' name='Emp_Code' value=" . $check[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='Check_ID' value=" . $check['Check_ID' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        
        echo "</tr>";
    }

?>
</table>


<?php
    include "../footer.php";
?>


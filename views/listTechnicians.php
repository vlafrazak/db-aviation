<?php
    include "../header.php";
?>

<h2>Technicians</h2>
<table id="playlist" class = "content">
<tr class="even">
<th>Code</th>
<th>Rank</th>
<th></th>
<th></th>
<th></th>
</tr>

<?php
    $techs = include "../models/listTechnicians.php";

    foreach( $techs as $tech ) {
        echo "\n<tr>";
        
        echo "<td>" .  $tech[ 'Code' ] . "</td>";
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

<?php
    include "../header.php";
?>


<h2>Aircraft Model</h2>

<table>
<tr>
<th>Model Code</th> 
<th>Model Name</th> 
<th>Capacity</th> 
<th>Weight</th> 
<th>Manufacturer</th>
<th>    </th>
<th>    </th>
</tr>

<?php
    $aircrafts = include "../models/listAircraftModel.php";

    foreach( $aircrafts as $aircraft ) {
        echo "<tr>";

        echo "<td>" .  $aircraft[ 'Model_Code' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Model_Name' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Weight' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Manufacturer' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/views/updateAircraftModel.php' method='post'>";
        echo "<input type='hidden' name='Model_Code' value=" . $employee[ 'Model_Code' ] . "/>";
        echo "<input type='hidden' name='Model_Name' value=" . $employee[ 'Model_Name' ] . "/>";
        echo "<input type='hidden' name='Manufacturer' value=" . $employee[ 'Manufacturer' ] . "/>";
        echo "<input type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";


        echo "<td><form action='/~db/db-aviation/models/deleteAircraftFleet.php' method='post'>";
        echo "<input type='hidden' name='Registration_Number' value=" . $employee[ 'Registration_Number' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        
        echo "</tr>";
    }

?>
</table>

<th><a href="/~db/db-aviation/views/createAircraftFleet">Insert</a></th>


<?php
    include "../footer.php";
?>


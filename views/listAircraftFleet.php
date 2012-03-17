<?php
    include "../header.php";
?>


<h2>Aircraft Fleet</h2>
<table class = "content">
<tr>
<th>Registration Number</th> 
<th>Air Carrier</th> 
<th>Construction Date</th> 
<th>Model Code</th> 
<th>    </th>
<th>    </th>
</tr>

<?php
    $aircrafts = include "../models/listAircraftFleet.php";

    foreach( $aircrafts as $aircraft ) {
        echo "<tr>";

        echo "<td>" .  $aircraft[ 'Registration_Number' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Air_Carrier' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Construction_Date' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Model_Code' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/views/updateAircraftFleet.php' method='post'>";
        echo "<input type='hidden' name='Registration_Number' value=" . $employee[ 'Registration_Number' ] . "/>";
        echo "<input type='hidden' name='Air_Carrier' value=" . $employee[ 'Air_Carrier' ] . "/>";
        echo "<input type='hidden' name='Construction_Date' value=" . $employee[ 'Construction_Date' ] . "/>";
        echo "<input type='hidden' name='Model_Code' value=" . $employee[ 'Model_Code' ] . "/>";
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

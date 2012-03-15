<?php
    include "../header.php";
?>


<table >
<tr>
<th>Registration_Number</th> 
<th>Air_Carrier</th> 
<th>Construction_Date</th> 
<th>Model_Code</th> 
<th><a href="/~db/db-aviation/views/createAircraftFleet">+</a></th>
</tr>

<?php
    $aircrafts = include "../models/listAircraftFleet.php";

    foreach( $aircrafts as $aircraft ) {
        echo "<tr>";
        echo "<td>" .  $aircraft[ 'Registration_Number' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Air_Carrier' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Construction_Date' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Model_Code' ] . "</td>";
        echo "<td><form action='../../models/deleteAircraftFleet.php' method='post'>";
            echo "<input type='hidden' name='Registration_Number' value=" . $aircraft[ 'Registration_Number' ] . "/>";
            echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        echo "</tr>";
    }

?>
</table>
<?php
    include "../footer.php";
?>

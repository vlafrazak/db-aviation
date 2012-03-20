<?php
    include "../header.php";
?>

<h2>HR Service Ability</h2>
Number of Aircrafts and number of Technicians able to repair them for each Model.
<br>
<table id="playlist" class="even">
<tr>
<th>Model Code</th>
<th>Number of Aircrafts</th>
<th>Number of Technicians</th>
</tr>

<?php
    $hrs = include "../models/needForTechnicians.php";

    foreach( $hrs as $hr ) {
        echo "<tr>";
        
        echo "<td>" .  $hr[ 'Model_Code' ] . "</td>";
        echo "<td>" .  $hr[ 'Number_of_Aircrafts' ] . "</td>";
        echo "<td>" .  $hr[ 'Number_of_Technicians' ] . "</td>";
        echo "</tr>";
    }
?>
</table>


<?php
    include "../footer.php";
?>


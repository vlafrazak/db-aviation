<?php
    include "../header.php";
?>


<table border = "1" >
<tr>
<th>Registration_Number</th> 
<th>Air_Carrier</th> 
<th>Construction_Date</th> 
<th>Model_Code</th> 
</tr>

<?php
    $employees = include "../models/listAircraftFleet.php";

    foreach( $employees as $employee ) {
        echo "<tr>";
        echo "<td>" .  $employee[ 'Registration_Number' ] . "</td>";
        echo "<td>" .  $employee[ 'Air_Carrier' ] . "</td>";
        echo "<td>" .  $employee[ 'Construction_Date' ] . "</td>";
        echo "<td>" .  $employee[ 'Model_Code' ] . "</td>";
        echo "</tr>";
    }

?>
</table>
<?php
    include "../footer.php";
?>

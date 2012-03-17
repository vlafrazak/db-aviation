<?php
    include "../header.php";
    include "../models/listIsExpertIn.php";
?>
<h2>Technicians</h2>
<table id="playlist" class = "content">
<tr class="even">
<th>Emp Code</th>
<th>First Name</th>
<th>Surname</th>
<th>E-mail</th>
<th>Phone</th>
<th>Experience</th>
</tr>

<?php
    $experts = isExpertIn( $_GET[ 'Model_Code' ] );
    
    foreach($experts as $expert) {
        echo "\n<tr>";
        echo "<td>" .  $expert[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $expert[ 'First_Name' ] . "</td>";
        echo "<td>" .  $expert[ 'Surname' ] . "</td>";
        echo "<td>" .  $expert[ 'Degree_of_Experience' ] . "</td>";
        echo "</tr>";
    }
?>
</table>

<?php
    include "../footer.php";
?>

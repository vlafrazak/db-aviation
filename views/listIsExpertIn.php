<?php
    include "../header.php";
    include "../models/listIsExpertIn.php";
?>
<h2>Technicians</h2>
<table id="playlist" class = "content">
<tr class="even">
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
<th>E-mail</th>
<th>Phone</th>
<th>Rank</th>
</tr>

<?php
    $experts = isExpertIn( $_GET[ 'Model_Code' ] );
    foreach($experts as $expert) {
        echo "\n<tr>";
        
        echo "<td>" .  $expert[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $expert[ 'SSN' ] . "</td>";
        echo "<td>" .  $expert[ 'Union_Membership_Number' ] . "</td>";
        echo "<td>" .  $expert[ 'First_Name' ] . "</td>";
        echo "<td>" .  $expert[ 'Surname' ] . "</td>";
        echo "<td>" .  $expert[ 'Street_Name' ] . "</td>";
        echo "<td>" .  $expert[ 'Street_Number' ] . "</td>";
        echo "<td>" .  $expert[ 'Postal_Code' ] . "</td>";
        echo "<td>" .  $expert[ 'Year_of_Birth' ] . "</td>";
        echo "<td>" .  $expert[ 'Salary' ] . "</td>";
        echo $expert
    }
?>
</table>

<?php
    include "../footer.php";
?>

<?php
    include "../header.php";
?>


<h2>FAA Tests</h2>

<table id="playlist" class = "content">
<tr class="odd">
<th>Test Number</th> 
<th>Test Name</th> 
<th>Max Score</th> 
</tr>

<?php
    $tests = include "../models/listFAATests.php";

    foreach( $tests as $test ) {
        echo "<tr>";

        echo "<td>" .  $test[ 'Test_Number' ] . "</td>";
        echo "<td>" .  $test[ 'Test_Name' ] . "</td>";
        echo "<td>" .  $test[ 'Max_Score' ] . "</td>";
        
       // echo "<td><form action='/~db/db-aviation/views/updateFAATests.php' method='post'>";
       // echo "<input type='hidden' name='Test_Number' value=" . $test[ 'Test_Number' ] . "/>";
       // echo "<input type='hidden' name='Test_Name' value=" . $test[ 'Test_Name' ] . "/>";
       // echo "<input type='hidden' name='Max_Score' value=" . $test[ 'Max_Score' ] . "/>";
       // echo "<input type='submit' value='Edit' title='Επεξεργασία'/>";
       // echo "</form></td>";


        echo "<td><form action='/~db/db-aviation/models/deleteFAATests.php' method='post'>";
        echo "<input type='hidden' name='Test_Number' value=" . $test[ 'Test_Number' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        
        echo "</tr>";
    }

?>
</table>

<th><a href="/~db/db-aviation/views/createFAATests">Insert</a></th>


<?php
    include "../footer.php";
?>



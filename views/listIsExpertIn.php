<?php
    include "../header.php";
    include "../models/listIsExpertIn.php";
?>
<h2>
<?php
    echo $_GET[ 'Model_Name' ];
?>
</h2>
<table id="playlist" class = "content">
<tr class="even">
<th>Emp Code</th>
<th>Experience</th>
<th>First Name</th>
<th>Surname</th>
<th>E-mail</th>
<th>Phone</th>
</tr>

<?php
    $experts = isExpertIn( $_GET[ 'Model_Code' ] );
    
    foreach($experts as $expert) {
        echo "\n<tr>";
        echo "<td>" .  $expert[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $expert[ 'Degree_of_Experience' ] . "</td>";
        echo "<td>" .  $expert[ 'First_Name' ] . "</td>";
        echo "<td>" .  $expert[ 'Surname' ] . "</td>";
        echo "<td>";
        echo "<ul>";
        foreach( $expert['mails'] as $mail ) {
            echo "<li><a href='mailto:" .  $mail[0]  . "'>" . $mail[0] . "</a></li>";
        }
        echo "</ul>";
        echo "</td>";
        
        echo "<td>";
        echo "<ul>";
        foreach( $expert['phones'] as $phone ) {
            echo "<li> $phone[0] </li>";
        }
        echo "</ul>";
        echo "</td>";
       
        echo "</tr>";
    }
?>
</table>

<?php
    include "../footer.php";
?>

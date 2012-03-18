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

        echo "<td class='emails'>";
        echo "<table class='noframe'><tr><td class='noframe'></td><td class='noframe'><a class='button' href='/~db/db-aviation/views/createEmail.php?Emp_Code=" . $expert[ 'Emp_Code' ] .
                                                            "&First_Name=" . $expert[ 'First_Name' ] .
                                                            "&Surname=" . $expert[ 'Surname' ] .
                                                            "'>+</a></td></tr>";
        foreach( $expert['mails'] as $mail ) {
            echo "<tr><td class='noframe'><a href='mailto:" .  $mail[0]  . "'>" . $mail[0] . "</a></td><td class='noframe'><a class='button' href='/~db/db-aviation/models/deleteEmail.php?E_mail=". $mail[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
        
        echo "<td class='phones'>";
        echo "<table class='noframe'><tr><td class='noframe'></td><td class='noframe'><a class='button' href='/~db/db-aviation/views/createPhone.php?Emp_Code=" . $expert[ 'Emp_Code' ] .
                                                            "&First_Name=" . $expert[ 'First_Name' ] .
                                                            "&Surname=" . $expert[ 'Surname' ] .
                                                            "'>+</a></td></tr>";
        foreach( $expert['phones'] as $phone ) {
            echo "<tr><td class='noframe'> $phone[0] </td> <td class='noframe'><a class='button' href='/~db/db-aviation/models/deletePhone.php?Phone=". $phone[0] ."'>x</a></td></tr>";
        }
        echo "</table>";
        echo "</td>";
        echo "<ul>";
       
        echo "</tr>";
    }
?>
</table>

<?php
    include "../footer.php";
?>

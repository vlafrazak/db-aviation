<?php
    include "../header.php";
    $aircrafts = include "../models/listAircraftFleet.php";
    $tests = include "../models/listFAATests.php";
    $techs = include "../models/listTechnicians.php";
?>

<h2>Insert a Check</h2>

<form action="/~db/db-aviation/models/insertChecks.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Registration Number:</td>
        <td> 
            <select type="int" name="Registration_Number" >
            <?php
                foreach( $aircrafts as $aircraft) {
                        echo "<option value='".$aircraft[ 'Registration_Number' ]."'>".$aircraft[ 'Registration_Number' ]."</option>";
                }
            ?>
            </select>
        </td>
    </tr>

    <tr class="even"><td>Test Name:</td>
        <td> 
            <select type="text" name="Test_Number">
            <?php
                foreach( $tests as $test) {
                        echo "<option value='".$test[ 'Test_Number' ]."'>".$test[ 'Test_Name' ]."</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr class="odd"><td>Emp Code:</td>
        <td> 
            <select type="int" name="Emp_Code">
            <?php
                foreach( $techs as $tech) {
                        echo "<option value='".$tech[ 'Emp_Code' ]."'>".$tech[ 'Emp_Code' ]." - ".$tech[ 'First_Name' ]." ".$tech[ 'Surname' ]."</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr class="even"><td>Check ID:</td><td> <input type="int" name="Check_ID" /></td></tr>
    <tr class="odd"><td>Check Duration:</td><td> <input type="int" name="Check_Duration" /></td></tr>
    <tr class="even"><td>Check Score:</td><td> <input type="int" name="Check_Score" /></td></tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listChecks.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php";
?>


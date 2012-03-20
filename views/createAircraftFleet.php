<?php
    include "../header.php";
    $models = include "../models/listAircraftModels.php";
?>

<h2>Insert an Aircraft</h2>

<form action="/~db/db-aviation/models/insertAircraftFleet.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Registration Number:</td><td> <input type="int" name="Registration_Number" /></td></tr>
    <tr class="even"><td>Air Carrier:</td><td> <input type="text" name="Air_Carrier" /></td></tr>
    <tr class="odd"><td>Construction Date(YYYY):</td><td> <input type="year" name="Construction_Date" /></td></tr>
    <tr class="even"><td>Model Code:</td><td> 
        <select type="int" name="Model_Code">
            <?php
                foreach( $models as $model) {
                        echo "<option value='".$model[ 'Model_Code' ]."'>".$model[ 'Model_Code' ]." - ".$model[ 'Model_Name' ]."</option>";
                }
            ?>
        </select>
    </td>
    </tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listAircraftFleet.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php";
?>

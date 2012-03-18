<?php
    include "../header.php";
    $models = include "../models/listAircraftModels.php";
?>

<h2>Add an Expertise for
<?php
    echo $_GET[ 'First_Name' ] . " " . $_GET[ 'Surname' ];
?>
</h2>

<form action='/~db/db-aviation/models/insertIsExpertIn.php' method='POST'>
    <table id="playlist" class ="input form">
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo $_GET[ 'Emp_Code' ]?>"/></td></tr>
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
    <tr class="odd"><td>Degree of Experience:</td><td> <input type="int" name="Degree_of_Experience" /></td></tr>
    </table>
    <input type="hidden" name="Emp_Code" value="<?php echo $_GET[ 'Emp_Code' ]?>"/></td></tr>
    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   
</form>

<form action='/~db/db-aviation/views/listTechnicians.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>



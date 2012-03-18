<?php
    include "../header.php";
    $models = include "../models/listAircraftModels.php";
?>

<h2>Insert a Technician's Information</h2>

<form action="/~db/db-aviation/models/insertTechnicians.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo rtrim($_POST['Emp_Code'],'/'); ?>"/></td></tr>
    <tr class="even"><td>Rank:</td><td> <input type="int" name="Rank" /></td></tr>
    <tr class="odd"><td>Model Code:</td><td> 
        <select type="int" name="Model_Code">
            <?php
                foreach( $models as $model) {
                        echo "<option value='".$model[ 'Model_Code' ]."'>".$model[ 'Model_Code' ]." - ".$model[ 'Model_Name' ]."</option>";
                }
            ?>
        </select>
    <tr class="even"><td>Degree of Experience:</td><td> <input type="int" name="Degree_of_Experience" /></td></tr>
    </td>
    </tr>
    </table>
    
    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   
    
</form>


<form action='/~db/db-aviation/views/listEmployees.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>

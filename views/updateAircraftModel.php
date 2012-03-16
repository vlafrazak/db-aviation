<?php
    include "../header.php"
?>

<h2>Update an Aircraft Model</h2>

<form action="/~db/db-aviation/models/updateAircraftModel.php" method="post">

    <table class="input form">
    <tr><td>Model_Code:</td><td> <input type="int" readonly="readonly" name="Model_Code" value="<?php echo rtrim($_POST['Model_Code'],'/'); ?>"/></td></tr>
    <tr><td>Model_Name:</td><td> <input type="text" name="Model_Name" value="<?php echo rtrim($_POST['Model_Name'],'/'); ?>"/></td></tr>
    <tr><td>Capacity:</td><td> <input type="int" name="Capacity" value="<?php echo rtrim($_POST['Capacity'],'/'); ?>"/></td></tr>
    <tr><td>Weight:</td><td> <input type="int" name="Weight" value="<?php echo rtrim($_POST['Weight'],'/'); ?>"/></td></tr>
    <tr><td>Manufacturer:</td><td> <input type="text" name="Manufacturer" value="<?php echo rtrim($_POST['Manufacturer'],'/'); ?>"/></td></tr>
    </table>

    <input type="submit" />


    <form action='/~db/db-aviation/models/listEmployees.php' method='post'>
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
    </form>

</form>                                                             

<?php
    include "../footer.php"
?>


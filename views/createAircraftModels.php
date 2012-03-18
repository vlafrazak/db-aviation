<?php
    include "../header.php";
?>

<h2>Insert an Aircraft Model</h2>

<form action="/~db/db-aviation/models/insertAircraftModels.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Model Code:</td><td> <input type="int" name="Model_Code" /></td></tr>
    <tr class="even"><td>Model Name:</td><td> <input type="text" name="Model_Name" /></td></tr>
    <tr class="odd"><td>Capacity:</td><td> <input type="int" name="Capacity" /></td></tr>
    <tr class="even"><td>Weight:</td><td> <input type="int" name="Weight" /></td></tr>
    <tr class="odd"><td>Manufacturer:</td><td> <input type="text" name="Manufacturer" /></td></tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listAircraftModels.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php";
?>


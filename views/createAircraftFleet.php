<?php
    include "../header.php"
?>

<h2>Aircraft Fleet</h2>
<form action="/~db/db-aviation/models/insertAircraftFleet.php" method="post">
<table class="input form">
<tr><td>Registration_Number:</td><td> <input type="int" name="Registration_Number" /></td></tr>
<tr><td>Air_Carrier:</td><td> <input type="text" name="Air_Carrier" /></td></tr>
<tr><td>Construction_Date:</td><td> <input type="int" name="Construction_Date" /></td></tr>
<tr><td>Model_Code:</td><td> <input type="int" name="Model_Code" /></td></tr>
<tr><td></td><td><input type="submit" /></td></tr>
</table>
</form>
<?php
    include "../footer.php"
?>

<?php
    include "../header.php"
?>

<h2>employees</h2>
<form action="../models/updateEmployee.php" method="post">
<table class="input form">
<tr><td>Emp_Code:</td><td> <input type="int" name="Emp_Code" value=<?php $_POST[Emp_Code] ?>/></td></tr>
<tr><td>SSN:</td><td> <input type="int" name="SSN" /></td></tr>
<tr><td>Union_Membership_Number:</td><td> <input type="int" name="Union_Membership_Number" /></td></tr>
<tr><td>First_Name:</td><td> <input type="varchar" name="First_Name" /></td></tr>
<tr><td>Surname:</td><td> <input type="varchar" name="Surname" /></td></tr>
<tr><td>Street_Name:</td><td> <input type="text" name="Street_Name" /></td></tr>
<tr><td>Street_Number:</td><td> <input type="int" name="Street_Number" /></td></tr>
<tr><td>Postal_Code:</td><td> <input type="int" name="Postal_Code" /></td></tr>
<tr><td>Year_of_Birth:</td><td> <input type="int" name="Year_of_Birth" /></td></tr>
<tr><td>Salary:</td><td> <input type="int" name="Salary" /></td></tr>
<tr><td></td><td><input type="submit" /></td></tr>
</table>
</form>
<?php
    include "../footer.php"
?>

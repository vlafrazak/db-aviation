<?php
    include "../header.php"
?>

<h2>Insert a Technician</h2>


<form action="/~db/db-aviation/models/insertEmployees.php" method="post">

    <table class="input form">
    <tr><td>Emp Code:</td><td> <input type="int" name="Emp_Code" /></td></tr>
    <tr><td>SSN:</td><td> <input type="int" name="SSN" /></td></tr>
    <tr><td>Union Membership Number:</td><td> <input type="int" name="Union_Membership_Number" /></td></tr>
    <tr><td>First Name:</td><td> <input type="varchar" name="First_Name" /></td></tr>
    <tr><td>Surname:</td><td> <input type="varchar" name="Surname" /></td></tr>
    <tr><td>Street Name:</td><td> <input type="text" name="Street_Name" /></td></tr>
    <tr><td>Street Number:</td><td> <input type="int" name="Street_Number" /></td></tr>
    <tr><td>Postal Code:</td><td> <input type="int" name="Postal_Code" /></td></tr>
    <tr><td>Year of Birth:</td><td> <input type="int" name="Year_of_Birth" /></td></tr>
    <tr><td>Salary:</td><td> <input type="int" name="Salary" /></td></tr>
    <tr><td>Rank:</td><td> <input type="int" name="Rank" /></td></tr>
    </table>
    
    <input type="submit" /></td>

</form>

<form action="/~db/db-aviation/models/insertTechnicians.php" method="post">
    <tr><td>Emp Code:</td><td> <input type="int" name="Emp_Code" /></td></tr>
    <tr><td>Rank:</td><td> <input type="int" name="Rank" /></td></tr>
    <input type="submit" /></td>
</form>


<form action='/~db/db-aviation/views/listTechnicians.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>

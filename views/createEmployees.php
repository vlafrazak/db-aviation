<?php
    include "../header.php"
?>

<h2>Insert an Employee</h2>


<form action="/~db/db-aviation/models/insertEmployees.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" name="Emp_Code" /></td></tr>
    <tr class = "even"><td>SSN:</td><td> <input type="int" name="SSN" /></td></tr>
    <tr class="odd"><td>UMN:</td><td> <input type="int" name="Union_Membership_Number" /></td></tr>
    <tr class="even"><td>First Name:</td><td> <input type="varchar" name="First_Name" /></td></tr>
    <tr class="odd"><td>Surname:</td><td> <input type="varchar" name="Surname" /></td></tr>
    <tr class = "even"><td>Street Name:</td><td> <input type="text" name="Street_Name" /></td></tr>
    <tr class="odd"><td>Street Number:</td><td> <input type="int" name="Street_Number" /></td></tr>
    <tr class="even"><td>Postal Code:</td><td> <input type="int" name="Postal_Code" /></td></tr>
    <tr class="odd"><td>Year of Birth:</td><td> <input type="int" name="Year_of_Birth" /></td></tr>
    <tr class="even"><td>Salary:</td><td> <input type="int" name="Salary" /></td></tr>
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listEmployees.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>

<?php
    include "../header.php"
?>

<h2>Insert an Employee</h2>


<form action="/~db/db-aviation/models/insertEmployee.php" method="post">

    <table class="input form">
    <tr><td>Emp_Code:</td><td> <input type="int" name="Emp_Code" /></td></tr>
    <tr><td>SSN:</td><td> <input type="int" name="SSN" /></td></tr>
    <tr><td>Union_Membership_Number:</td><td> <input type="int" name="Union_Membership_Number" /></td></tr>
    <tr><td>First_Name:</td><td> <input type="varchar" name="First_Name" /></td></tr>
    <tr><td>Surname:</td><td> <input type="varchar" name="Surname" /></td></tr>
    <tr><td>Street_Name:</td><td> <input type="text" name="Street_Name" /></td></tr>
    <tr><td>Street_Number:</td><td> <input type="int" name="Street_Number" /></td></tr>
    <tr><td>Postal_Code:</td><td> <input type="int" name="Postal_Code" /></td></tr>
    <tr><td>Year_of_Birth:</td><td> <input type="int" name="Year_of_Birth" /></td></tr>
    <tr><td>Salary:</td><td> <input type="int" name="Salary" /></td></tr>
    </table>
    
    <input type="submit" /></td>

    <form action='/~db/db-aviation/models/listEmployee.php' method='post'>
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
    </form>

</form>





<?php
    include "../footer.php"
?>

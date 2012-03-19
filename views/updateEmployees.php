<?php
    include "../header.php"
?>

<h2>Update an Employee</h2>

<form action="/~db/db-aviation/models/updateEmployees.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo rtrim($_POST['Emp_Code'],'/'); ?>"/></td></tr>
    <tr class="even"><td>SSN:</td><td> <input type="int" name="SSN" value="<?php echo rtrim($_POST['SSN'],'/'); ?>"/></td></tr>
    <tr class="odd"><td>UMN:</td><td> <input type="int" name="Union_Membership_Number" value="<?php echo rtrim($_POST['Union_Membership_Number'],'/'); ?>"/></td></tr>
    <tr class="even"><td>First Name:</td><td> <input type="varchar" name="First_Name" value="<?php echo rtrim($_POST['First_Name'],'/'); ?>"/></td></tr>
    <tr class="odd"><td>Surname:</td><td> <input type="varchar" name="Surname" value="<?php echo rtrim($_POST['Surname'],'/'); ?>"/></td></tr>
    <tr class="even"><td>Street Name:</td><td> <input type="varchar" name="Street_Name" value="<?php echo rtrim($_POST['Street_Name'],'/'); ?>"/></td></tr>
    <tr class="odd"><td>Street Number:</td><td> <input type="int" name="Street_Number" value="<?php echo rtrim($_POST['Street_Number'],'/'); ?>"/></td></tr>
    <tr class="even"><td>Postal Code:</td><td> <input type="int" name="Postal_Code" value="<?php echo rtrim($_POST['Postal_Code'],'/'); ?>"/></td></tr>
    <tr class="odd"><td>Year of Birth:</td><td> <input type="int" name="Year_of_Birth" value="<?php echo rtrim($_POST['Year_of_Birth'],'/'); ?>"/></td></tr>
    <tr class="even"><td>Salary:</td><td> <input type="int" name="Salary" value="<?php echo rtrim($_POST['Year_of_Birth'],'/'); ?>"/></td></tr>
    </table>

    <input type="submit" title='Prosthiki'/>


    <form action='/~db/db-aviation/models/listEmployees.php' method='post'>
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
    </form>

</form>                                                             

<?php
    include "../footer.php"
?>

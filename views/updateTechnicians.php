<?php
    include "../header.php"
?>

<h2>Update a Technician</h2>

<form action="/~db/db-aviation/models/updateTechnicians.php" method="post">

    <table class="input form">
    <tr><td>Emp_Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo rtrim($_POST['Emp_Code'],'/'); ?>"/></td></tr>
    <tr><td>SSN:</td><td> <input type="int" name="SSN" value="<?php echo rtrim($_POST['SSN'],'/'); ?>"/></td></tr>
    <tr><td>Union_Membership_Number:</td><td> <input type="int" name="Union_Membership_Number" value="<?php echo rtrim($_POST['Union_Membership_Number'],'/'); ?>"/></td></tr>
    <tr><td>First_Name:</td><td> <input type="varchar" name="First_Name" value="<?php echo rtrim($_POST['First_Name'],'/'); ?>"/></td></tr>
    <tr><td>Surname:</td><td> <input type="varchar" name="Surname" value="<?php echo rtrim($_POST['Surname'],'/'); ?>"/></td></tr>
    <tr><td>Street_Name:</td><td> <input type="varchar" name="Street_Name" value="<?php echo rtrim($_POST['Street_Name'],'/'); ?>"/></td></tr>
    <tr><td>Street_Number:</td><td> <input type="int" name="Street_Number" value="<?php echo rtrim($_POST['Street_Number'],'/'); ?>"/></td></tr>
    <tr><td>Postal_Code:</td><td> <input type="int" name="Postal_Code" value="<?php echo rtrim($_POST['Postal_Code'],'/'); ?>"/></td></tr>
    <tr><td>Year_of_Birth:</td><td> <input type="int" name="Year_of_Birth" value="<?php echo rtrim($_POST['Year_of_Birth'],'/'); ?>"/></td></tr>
    <tr><td>Salary:</td><td> <input type="int" name="Salary" value="<?php echo rtrim($_POST['Salary'],'/'); ?>"/></td></tr>
    <tr><td>Rank:</td><td> <input type="int" name="Rank" value="<?php echo rtrim($_POST['Rank'],'/'); ?>"/></td></tr>
    </table>

    <input type="submit" />


    <form action='/~db/db-aviation/models/listTechnicians.php' method='post'>
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
    </form>

</form>                                                             

<?php
    include "../footer.php"
?>

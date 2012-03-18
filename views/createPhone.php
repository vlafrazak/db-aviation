<?php
    include "../header.php";
?>

<h2>Insert a phone number for
<?php
    echo $_GET[ 'First_Name' ] . " " . $_GET[ 'Surname' ];
?>
</h2>

<form action='/~db/db-aviation/models/insertPhone.php' method='POST'>
    <table id="playlist" class ="input form">
    <tr class="odd"><td>First Name:</td><td> <input type="text" readonly="readonly" name="First_Name" value="<?php echo $_GET[ 'First_Name' ]?>"/></td></tr>
    <tr class="even"><td>Surname:</td><td> <input type="text" readonly="readonly" name="Surname" value="<?php echo $_GET[ 'Surname' ]?>"/></td></tr>
    <tr class="odd"><td>Phone Number:</td><td> <input type="int" name="Phone_Number" /></td></tr>
    </table>
    <input type="hidden" name="Emp_Code" value="<?php echo $_GET[ 'Emp_Code' ]?>"/></td></tr>
    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   
</form>

<form action='/~db/db-aviation/views/listEmployees.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php"
?>


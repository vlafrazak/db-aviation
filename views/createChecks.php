<?php
    include "../header.php"
?>

<h2>Insert a Check</h2>

<form action="/~db/db-aviation/models/insertChecks.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Registration Number:</td><td> <input type="int" name="Registration_Number" /></td></tr>
    <tr class="even"><td>Test Number:</td><td> <input type="text" name="Test_Number" /></td></tr>
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" name="Emp_Code" /></td></tr>
    <tr class="even"><td>Check ID:</td><td> <input type="int" name="Check_ID" /></td></tr>
    <tr class="odd"><td>Check Duration:</td><td> <input type="int" name="Check_Duration" /></td></tr>
    <tr class="even"><td>Check Score:</td><td> <input type="int" name="Check_Score" /></td></tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listChecks.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php"
?>


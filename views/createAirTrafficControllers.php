<?php
    include "../header.php"
?>

<h2>Insert a Controller's Exam Information</h2>

<form action="/~db/db-aviation/models/insertAirTrafficControllers.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo rtrim($_POST['Emp_Code'],'/'); ?>"/></td></tr>
    <tr class="even"><td>Last Exam Date:</td><td> <input type="date" name="Last_Exam_Date" /></td></tr>
    <tr class="odd"><td>Exam Result:</td><td> <input type="int" name="Exam_Result" /></td></tr>
    </table>
    
    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>


<form action='/~db/db-aviation/views/listEmployees.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>


<?php
    include "../header.php"
?>

<h2>Insert a Technician's Rank</h2>

<form action="/~db/db-aviation/models/insertTechnicians.php" method="post">

    <table>
    <tr id="playlist" class="odd"><td>Emp Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo rtrim($_POST['Emp_Code'],'/'); ?>"/></td></tr>
    <tr><td>Rank:</td><td> <input type="int" name="Rank" /></td></tr>
    </table>
    
    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>


<form action='/~db/db-aviation/views/listTechnicians.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>

<?php
    include "../header.php"
?>

<h2>Update a Technician's Rank</h2>

<form action="/~db/db-aviation/models/updateTechnicians.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Emp Code:</td><td> <input type="int" readonly="readonly" name="Emp_Code" value="<?php echo rtrim($_POST['Emp_Code'],'/'); ?>"/></td></tr>
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

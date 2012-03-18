<?php
    include "../header.php"
?>

<h2>Insert an FAA Test</h2>

<form action="/~db/db-aviation/models/insertFAATests.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Test Number</td><td> <input type="int" name="Test_Number" /></td></tr>
    <tr class = "even"><td>Test  Name:</td><td> <input type="text" name="Test_Name" /></td></tr>
    <tr class="odd"><td>Max Score:</td><td> <input type="int" name="Max_Score" /></td></tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listFAATests.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php"
?>


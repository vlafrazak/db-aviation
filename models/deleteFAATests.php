<?php  
  include 'database.php';
  query("DELETE FROM FAA_TEST WHERE Test_Number = '$_POST[Test_Number]'" );
  Header ('Location: /~db/db-aviation/views/listFAATests.php');
?>





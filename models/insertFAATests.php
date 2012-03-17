<?php  
  include 'database.php';
  query(
   "INSERT INTO FAA_TEST (
       Test_Number,
       Test_Name,
       Max_Score
   ) 
   VALUES (
       $_POST[Test_Number],
       '$_POST[Test_Name]',
       $_POST[Max_Score]

   )");

     
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listFAATests.php');
?>




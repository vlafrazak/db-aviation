<?php  
  include 'database.php';
  query(
   "INSERT INTO TECHNICIANS (
       Emp_Code,
       Rank
   ) 
   VALUES (
       $_POST[Emp_Code],
       $_POST[Rank]
   )");

     
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listTechnicians.php');
?>


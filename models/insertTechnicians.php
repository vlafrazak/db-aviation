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
  query(
   "INSERT INTO IS_EXPERT_IN (
       Emp_Code,
       Model_Code,
       Degree_of_Experience
   ) 
   VALUES (
       $_POST[Emp_Code],
       $_POST[Model_Code],
       $_POST[Degree_of_Experience]
   )");

     
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listTechnicians.php');
?>


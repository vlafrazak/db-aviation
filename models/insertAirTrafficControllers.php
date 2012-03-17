<?php  
  include 'database.php';
  query(
   "INSERT INTO AIR_TRAFFIC_CONTROLLERS (
       Emp_Code,
       Last_Exam_Date,
       Exam_Result
   ) 
   VALUES (
       $_POST[Emp_Code],
       '$_POST[Last_Exam_Date]',
       $_POST[Exam_Result]

   )");

     
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listAirTrafficControllers.php');
?>



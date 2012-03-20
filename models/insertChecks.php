<?php  
  include 'database.php';
  
  $reg = $_POST[Registration_Number];
  $test = $_POST[Test_Number];
  $emp  = $_POST[Emp_Code];
  $chid = $_POST[Check_ID];
  $chdur = $_POST[Check_Duration];
  $chsc = $_POST[Check_Score];

 
  query(
    "INSERT INTO CHECKS (
      Registration_Number,
      Test_Number,
      Emp_Code,
      Check_ID,
      Check_Duration,
      Check_Score
    )
    VALUES (
     $reg,  
     $test, 
     $emp,  
     $chid, 
     $chdur, 
     $chsc     
   )");
    
//     $max_score = query(
//     "SELECT 
//       c.Max_Score
//     FROM
//      FAA_TEST c
//     WHERE
//     c.Test_Number = $test
//     ");
//    echo $score;
//    echo $max_score;
//    if(1000 > $max_score[0]) {
//      die( error_function( $max_score ,mysql_error()) );
//    }
//
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listChecks.php');
?>


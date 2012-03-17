<?php  
  include 'database.php';
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
        $_POST[Registration_Number],
        $_POST[Test_Number],
        $_POST[Emp_Code],
        $_POST[Check_ID],
        $_POST[Check_Duration],
        $_POST[Check_Score]

    )");
   
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listChecks.php');
?>


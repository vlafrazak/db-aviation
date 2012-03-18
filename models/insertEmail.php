<?php  
  include 'database.php';
  query(
      "INSERT INTO E_MAILS (
        Emp_Code,
        E_mail
    )
    VALUES (
        $_POST[Emp_Code],
        '$_POST[E_mail]'
    )");
  
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>


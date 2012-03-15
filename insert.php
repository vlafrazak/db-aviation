<p>
<?php  
  Print 'insert<br>';
  include 'connect.php';
  include 'database.php';
  connect();
//  echo    $_POST[Emp_Code];
//  echo    $_POST[SSN];
//  echo    $_POST[Union_Membership_Number];
//  echo    $_POST[First_Name];
//  echo    $_POST[Surname];
//  echo    $_POST[Street_Name];
//  echo    $_POST[Street_Number];
//  echo    $_POST[Postal_Code];
//  echo    $_POST[Year_of_Birth];
//  echo    $_POST[Salary];
//

$sql=mysql_query("INSERT INTO EMPLOYEES (
    Emp_Code,
    SSN,
    Union_Membership_Number,
    First_Name,
    Surname,
    Street_Name,
    Street_Number,
    Postal_Code,
    Year_of_Birth,
    Salary
)
VALUES(
    $_POST[Emp_Code],
    $_POST[SSN],
    $_POST[Union_Membership_Number],
    '$_POST[First_Name]', 
    '$_POST[Surname]',
    '$_POST[Street_Name]',
    $_POST[Street_Number],
    $_POST[Postal_Code],
    $_POST[Year_of_Birth],
    $_POST[Salary]
)") or die(mysql_error());
  query_array('SELECT *
      FROM EMPLOYEES'
  ) or die(mysql_error());

    disconnect();
?>
</p>

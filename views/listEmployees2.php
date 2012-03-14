<?php
    include "../header.php";
?>
<table border = "1" >
<tr>
<th>Emp_code</th> 
<th>SSN</th> 
<th>Union_Member_Number</th> 
<th>First_Name</th> 
<th>Surname</th> 
<th>Street_Name</th> 
<th>Street_Number</th> 
<th>Postal_code</th> 
<th>Year_of_birth</th> 
<th>Salary</th> 
</tr>
<?php
    $employees = include "../models/listEmployee.php";

    foreach( $employees as $employee ) {
   ?>
        <tr>
        <td>
<?php
    echo $employee[ 'Emp_code' ];
    echo $employee[ 'SSN' ];
    echo $employee[ 'Union_Member_Number' ];
    echo $employee[ 'First_Name' ];
    echo $employee[ 'Surname' ];
    echo $employee[ 'Street_Name' ];
    echo $employee[ 'Street_Number' ];
    echo $employee[ 'Postal_code' ];
    echo $employee[ 'Year_of_birth' ];
    echo $employee[ 'Salary' ];
?>
        </td>
        </tr>
<?php
    }

?>
</table>
<?php
    include "../footer.php";
?>

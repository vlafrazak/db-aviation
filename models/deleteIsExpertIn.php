<?php
    include "database.php";
    query("DELETE FROM IS_EXPERT_IN WHERE Emp_Code = '" . $_GET[ 'Emp_Code' ] . "' AND Model_Code = '" . $_GET[ 'Model_Code']."'");
    Header ('Location: /~db/db-aviation/views/listTechnicians.php');
?>


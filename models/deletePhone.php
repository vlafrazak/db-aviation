<?php
    include "database.php";
    query("DELETE FROM PHONES WHERE Phone_Number = " . $_GET[ 'Phone_Number' ] );
    Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>


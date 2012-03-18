<?php
    include "database.php";
    query("DELETE FROM E_MAILS WHERE E_mail = '" . $_GET[ 'E_mail' ] ."'");
    Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>

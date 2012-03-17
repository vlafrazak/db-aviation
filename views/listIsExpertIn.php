<?php
    include "../models/listIsExpertIn.php";
    $experts = isExpertIn( $_GET[ 'Model_Code' ] );
    foreach($experts as $expert) {
        echo $expert
    }
?>

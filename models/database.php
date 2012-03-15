<?php
include "connect.php";
function query($query) {
    connect();
    $result = mysql_query($query) or die(mysql_error());
    if ( !$result ) {
        die( mysql_error() );
    }
    disconnect();
}
function query_array($query) {
    connect();
    $result = mysql_query($query) or die(mysql_error());
    if ( !$result ) {
        die( mysql_error() );
    }

    while($row = mysql_fetch_array($result))
    {
        $answer[ $row[0] ] = $row;
    } 
    mysql_free_result($result);
    disconnect();
    return $answer;
}
?>

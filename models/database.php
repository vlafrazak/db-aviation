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
        $answer[] = $row;
    } 
    //mysql_free_result($result);
    disconnect();
    return $answer;
}

function query_row($query) {
    connect();
    $result = mysql_query($query) or die(mysql_error());
    if ( !$result ) {
        die( mysql_error() );
    }

    $row = mysql_fetch_array($result);
    //mysql_free_result($result);
    disconnect();
    return $answer;
}
?>

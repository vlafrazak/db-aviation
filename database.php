<?php
function query_array($query){
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {
    echo $row[1];  
}
}
mysql_free_result($result);
?>

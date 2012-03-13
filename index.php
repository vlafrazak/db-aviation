<html>
<body>
<h1>Test</h1>

<h2>
<?php
    include 'connect.php';
    include 'database.php';
    connect();
    query_array('SELECT *
        FROM `AIRCRAFT_MODEL`
        LIMIT 0 , 30'
        );
    disconnect();
    
	echo "<p>Hello World</p>";
?>
</h2>
</body>
</html>

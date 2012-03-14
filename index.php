<html>
<body>
<h1>Test</h1>


<?php
    include 'connect.php';
    include 'database.php';

    connect();
    query_array('SELECT *
        FROM EMPLOYEES'
    );

       "SELECT *  FROM TECHNICIANS";

    $result=mysql_query($query);

    while($row=mysql_fetch_array($result))

    {

            print("$row[roll_no],$row[name],$row[specialization]");

            }
   
       
    while($data=mysql_fetch_row($result))
       
    {
       
           print("$data[0],$data[1],$data[2],$data[3]");
          
    } 
    
    disconnect();
    
	echo "<p>Hello World</p>";
?>

</body>
</html>

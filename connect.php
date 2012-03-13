<?php
    function connect() {
        $myset = include 'settings-local.php';
        $link = mysql_connect(  $myset[ 'hostname' ],
                                $myset[ 'username' ],
                                $myset[ 'password']
                            );

        if (!$link) {
                die('Could not connect: ' . mysql_error());
        }

        //make foo the current db
        $db_selected = mysql_select_db($myset[ 'database' ], $link);
        if (!$db_selected) {
            die ('Can\'t use aviation : ' . mysql_error());
        }
        echo "I am connected\n";
    }
    function disconnect() {
        mysql_close();
    }


?>



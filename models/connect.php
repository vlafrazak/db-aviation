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

        //make database the current db
        $db_selected = mysql_select_db($myset[ 'database' ], $link);
        if (!$db_selected) {
            die ('Can\'t use aviation : ' . mysql_error());
        }
        mysql_query("SET NAMES utf8");
        //echo "I am connected\n";
    }
    function disconnect() {
        mysql_close();
    }


?>



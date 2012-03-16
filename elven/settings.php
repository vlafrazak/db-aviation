<?php
    //$settingsLocal = include 'settings-local.php';
    $settingsGlobal = array(
        'db' => array(
            'username' => 'root',
            'password' => '87654321',
            'database' => 'el_venizelos'
        ),
        'url' => 'http://localhost/elven/',
        // do not override these in your local settings; we want to share a common upload directory
        //'uploaddir' => '/var/www/kamibu.com/dionyziz/aviation/uploads/',
        //'uploadurl' => 'http://dionyziz.kamibu.com/aviation/uploads/'
    );

    //foreach ( $settingsLocal as $key => $setting ) {
    //    $settingsGlobal[ $key ] = $setting;
    //}
    return $settingsGlobal;
?>

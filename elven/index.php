<?php
    include 'header.php';
    $methods = array(
        'create' => 1,
        'view' => 0,
        'listing' => 0,
        'update' => 1,
        'delete' => 1
    );
    if ( isset( $_GET[ 'resource' ] ) ) {
        $resource = $_GET[ 'resource' ];
    }
    else {
        $resource = '';
    }
    if ( isset( $_GET[ 'method' ] ) ) {
        $method = $_GET[ 'method' ];
    }
    else {
        $method = '';
    }
    if ( !isset( $methods[ $method ] ) ) {
        $method = 'view';
    }
    switch ( $_SERVER[ 'REQUEST_METHOD' ] ) {
        case 'POST':
            $http_vars = $_POST;
            break;
        case 'GET':
            $http_vars = $_GET;
            break;
        default:
            $http_vars = array();
            break;
    }
    if ( $methods[ $method ] == 1 && $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) {
        $method = $method . 'View';
        
    }
    $resource = basename( $resource );
    $filename = 'controllers/' . $resource . '.php';
    if ( !file_exists( $filename ) ) {
        $resource = 'home';
        $method = 'listing';
        $filename = 'controllers/' . $resource . '.php';
    }
    include $filename;	
    $controllername = ucfirst( $resource ) . 'Controller';
    $methodname = $method;
    $reflection = new ReflectionMethod( $controllername, $methodname );
    $parameters = $reflection->getParameters();
    $arguments = array();
    foreach ( $parameters as $parameter ) {
        if ( isset( $http_vars[ $parameter->name ] ) ) {
            $arguments[] = $http_vars[ $parameter->name ];
        }
        else {
            if ( isset( $_FILES[ $parameter->name ] ) ) {
                $arguments[] = $_FILES[ $parameter->name ];
            }
            $arguments[] = null;
        }
    }
    unset( $_GET ); unset( $_POST ); unset( $_FILES );
    try {
        call_user_func_array( array( $controllername, $methodname ), $arguments );
    }
    catch ( RedirectException $e ) {
        global $settings;
        $url = $settings[ 'url' ] . $e->getURL();
        header( 'Location: ' . $url );
    }
    catch ( Exception $e ) {
        if ( !headers_sent() ) {
            header( 'Content-type: text/plain' );
        }
        echo $controllername . '::' . $methodname . ' call rejected: ' . $e->getMessage();
        echo "\n\n" . str_repeat( '=', 80 ) . "\nCALLTRACE\n";
        echo str_repeat( '=', 80 ) . "\n";

        echo $e->getTraceAsString();
    }
?>

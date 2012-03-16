<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

    function unionListing()
    {
        $result = mysql_query(
            "SELECT
                *
            FROM
                EMP_UNION
            ORDER BY UMN"
        );
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'UMN' ] ] = $temp;
        }
        return $rows_returned;
    }
?>

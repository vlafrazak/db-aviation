<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

    function checkCreate( $Test_Name,$Max_Score )
    {
		preg_match_all('/[0-9]/', $Max_Score, $matches);
		$count = count($matches[0]);
		$length = strlen($Max_Score);
		if(($count!=$length)||($length > 3)){
			Redirect( 'check/create?error');
		}
		$error_insert = mysql_query(
			"INSERT INTO
				faa_test
			SET
				Test_Name = '$Test_Name',
				Max_Score = '$Max_Score'"
			);
		if( $error_insert==FALSE )  {
			Redirect( 'check/create?error');
		}
    }

    function checkListing()
    {
        $result = mysql_query(
            "SELECT
                *
            FROM
                faa_test
            ORDER BY Test_Name"
        );
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Test_Name' ] ] = $temp;
        }
        return $rows_returned;
    }

    function checkDelete( $Test_Number )
    {
        mysql_query(
            "DELETE FROM
                faa_test
            WHERE
                Test_Number = ' $Test_Number '"
        );
    }
	
	
	function checkUpdateFetch($Test_Number)
	{
		$result = mysql_query(
			"SELECT
                *
            FROM
                faa_test
            WHERE Test_Number = ' $Test_Number '"
        );
		$rows_returned = array();
        $rec  = mysql_fetch_array( $result );
        return $rec;
	}

	function checkUpdate( $Test_Name,$Max_Score,$Test_Number )
	{
		preg_match_all('/[0-9]/', $Max_Score, $matches);//////////////////
		$count = count($matches[0]);
		$length = strlen($Max_Score);
		if(($count!=$length)||($length > 3)){
			return FALSE;
		}
		mysql_query(
			"UPDATE
				faa_test
			SET
				Test_Name = '$Test_Name',
				Max_Score = '$Max_Score'
			WHERE Test_Number = '$Test_Number'");
		return TRUE;
	}
?>

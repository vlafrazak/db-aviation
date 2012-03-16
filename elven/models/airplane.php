<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

    function airplaneCreate( $Model_Name,$Capacity,$Weight,$Manufacturer )
    {
		preg_match_all('/[0-9]/', $Capacity, $matches);
		$count = count($matches[0]);
		$length = strlen($Capacity);
		if($count!=$length){
			Redirect( 'airplane/create?error');
		}
		preg_match_all('/[0-9]/', $Weight, $matches);//////////////////
		$count = count($matches[0]);
		$length = strlen($Weight);
		if(($count!=$length)||($length > 3)){
			Redirect( 'airplane/create?error');
		}
		preg_match_all('/[a-z]|[A-Z]/', $Manufacturer, $matches);
		$count = count($matches[0]);
		$length = strlen($Manufacturer);
		if($count!=$length){
			Redirect( 'airplane/create?error');
		}
		$error_insert = mysql_query(
			"INSERT INTO
				aircraft_model
			SET
				Model_Name = '$Model_Name',
				Capacity = '$Capacity',
				Weight = '$Weight',
				Manufacturer = '$Manufacturer'"
			);
		if( $error_insert==FALSE )  {
			Redirect( 'airplane/create?error');
		}
    }

    function airplaneListing()
    {
        $result = mysql_query(
            "SELECT
                *
            FROM
                aircraft_model
            ORDER BY Model_Name"
        );
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Model_Name' ] ] = $temp;
        }
        return $rows_returned;
    }

    function airplaneDelete( $Model_Code )
    {
        mysql_query(
            "DELETE FROM
                aircraft_model
            WHERE
                Model_Code = ' $Model_Code '"
        );
    }
	
	
	function airplaneUpdateFetch($Model_Code)
	{
		$result = mysql_query(
			"SELECT
                *
            FROM
                aircraft_model
            WHERE Model_Code = ' $Model_Code '"
        );
		$rows_returned = array();
        $rec  = mysql_fetch_array( $result );
        return $rec;
	}

	function airplaneUpdate( $Model_Name,$Capacity,$Weight,$Manufacturer,$Model_Code )
	{
		preg_match_all('/[0-9]/', $Capacity, $matches);
		$count = count($matches[0]);
		$length = strlen($Capacity);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[0-9]/', $Weight, $matches);//////////////////
		$count = count($matches[0]);
		$length = strlen($Weight);
		if(($count!=$length)||($length > 3)){
			return FALSE;
		}
		preg_match_all('/[a-z]|[A-Z]/', $Manufacturer, $matches);
		$count = count($matches[0]);
		$length = strlen($Manufacturer);
		if($count!=$length){
			return FALSE;
		}
		mysql_query(
			"UPDATE
				aircraft_model
			SET
				Model_Name = '$Model_Name',
				Capacity = '$Capacity',
				Weight = '$Weight',
				Manufacturer = '$Manufacturer'
			WHERE Model_Code = '$Model_Code'");
		return TRUE;
	}
?>

<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

	function employeesCount()
	{
		$count = mysql_query("
			SELECT
				COUNT(*)
			FROM
				employees
			");
        return mysql_fetch_array( $count ); 
    }

	function planesListing()
	{
		$result = mysql_query("
			SELECT
				aircraft_model.Manufacturer,
				aircraft_model.Model_Name,
				COUNT(*)
			FROM
				aircraft CROSS JOIN aircraft_model ON
				aircraft_model.Model_Code = aircraft.Model_Code
			GROUP BY Model_Name
			");
		
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Model_Name' ] ] = $temp;
        }
        return $rows_returned;	
	}

	function statsSearch( $Base )
	{
		
		$result = mysql_query("		
				SELECT Tech_Code,COUNT(*)
				FROM is_expert_in
				GROUP BY Tech_Code
				HAVING COUNT(*)>='$Base'
		");
		// $resolidi = mysql_query("
			// SELECT
				// COUNT(*)
			// FROM 
				// '$result'
		// ");
		
		$rows_returned = array();
		$i = 0;
        while ( $temp  = mysql_fetch_array( $result ) )
        {
			$i = $i +1;
            $rows_returned[ $temp[ 'COUNT(*)' ] ] = $temp;
        }
        return $i;	
		//return $result;
		// $temp  = mysql_fetch_array( $resolidi );
		// echo "balls";
		// return $temp;//mysql_fetch_array( $result );
	}
?>

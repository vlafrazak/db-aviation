<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

	function aircraftModels()
	{		
		$result = mysql_query(
		"SELECT
			Model_Name,
			Model_Code,
			Manufacturer
		FROM
		   aircraft_model");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Model_Code' ] ] = $temp;
        }
        return $rows_returned;
	}
    function fleetCreate($Registration_Number,$Air_Carrier,$Construction_Date,$Model_Code)
    {
        $error_insert = mysql_query(
            "INSERT INTO
                aircraft
            SET
                Registration_Number = '$Registration_Number',
                Air_Carrier = '$Air_Carrier',
                Construction_Date = '$Construction_Date',
                Model_Code = '$Model_Code'"
            );
		return $error_insert;
    }

    function fleetListing()
    {
        $result = mysql_query(
            "SELECT
                aircraft.Registration_Number,
				aircraft.Air_Carrier,
				aircraft.Construction_Date,
				aircraft_model.Manufacturer,
				aircraft_model.Model_Name
            FROM
                aircraft CROSS JOIN aircraft_model ON
				aircraft_model.Model_Code = aircraft.Model_Code
            ORDER BY Registration_Number"
        );
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Registration_Number' ] ] = $temp;
        }
        return $rows_returned;
    }

    function fleetDelete( $Registration_Number )
    {
        mysql_query(
            "DELETE FROM
                aircraft
            WHERE
                Registration_Number = '$Registration_Number'"
        );
    }
	
	
	function  updateFetch($Registration_Number)
	{
		$result = mysql_query(
			"SELECT
                *
            FROM
                aircraft
            WHERE Registration_Number = '$Registration_Number'"
        );
        $rec  = mysql_fetch_array( $result );
        return $rec;
	}

	function fleetUpdate($Old_Registration_Number,$Registration_Number,$Air_Carrier,$Construction_Date,$Model_Code)
	 {	
		$result = mysql_query(
			"UPDATE
				aircraft
			SET
				Registration_Number = '$Registration_Number',
                Air_Carrier = '$Air_Carrier',
                Construction_Date = '$Construction_Date',
                Model_Code = '$Model_Code'
			WHERE Registration_Number = '$Old_Registration_Number'"
            );
		return $result;
	}
?>

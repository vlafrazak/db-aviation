<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

    function testListing()
    {
        $result = mysql_query(
            "SELECT
                aircraft.Registration_Number,
				aircraft.Air_Carrier,
				aircraft.Construction_Date,
				aircraft_model.Manufacturer,
				aircraft_model.Model_Name,
				aircraft_model.Model_Code
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
	
	function testView($Registration_Number)
	{
		$result = mysql_query(
            "SELECT
				employees.First_Name,
				employees.Surname,
				employees.UMN,
				checks.Registration_Number,
				checks.Test_Number,
				checks.Emp_Code,
				checks.Check_ID,
				checks.Check_Duration,
				checks.Check_Score,
				faa_test.Test_Name,
				faa_test.Max_Score	
			FROM
			checks CROSS JOIN faa_test CROSS JOIN employees ON
				checks.Test_Number = faa_test.Test_Number AND checks.Emp_Code = employees.Emp_Code
			WHERE
				Registration_Number = '$Registration_Number'");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Check_ID' ] ] = $temp;
        }
        return $rows_returned;
    }
	
	function testDelete( $Registration_Number,$Test_Number,$Emp_Code,$Check_ID )
    {
        mysql_query(
            "DELETE FROM
                checks
            WHERE
                Registration_Number = '$Registration_Number' 	AND
				Test_Number = '$Test_Number'					AND
				Emp_Code = '$Emp_Code'							AND
				Check_ID = '$Check_ID'"
        );
    }
	
	function findFaas()
	{
		$result = mysql_query("
		SELECT
			*
		FROM
			faa_test");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Test_Number' ] ] = $temp;
        }
        return $rows_returned;
	}
	
	function findTechnicians($Model_Code)
	{
		$result = mysql_query("
		SELECT
			employees.First_Name,
			employees.Surname,
			employees.Emp_Code
		FROM
			employees CROSS JOIN is_expert_in ON
			employees.Emp_Code = is_expert_in.Tech_Code
		WHERE
			is_expert_in.Model_Code = '$Model_Code'");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Emp_Code' ] ] = $temp;
        }
        return $rows_returned;
	}

	function testAdd($Registration_Number,$Test_Number,$Tech_Code,$time,$score)
	{
		$result = mysql_query("
			INSERT INTO
				checks
			SET
				Registration_Number = '$Registration_Number',
				Test_Number = '$Test_Number',
				Emp_Code = '$Tech_Code',
				Check_Duration = '$time',
				Check_Score = '$score'");
		if ($result == FALSE)
			return 1;
		return 0;
	}
	
	function findScore($Test_Number)
	{
		$result = mysql_query("
		SELECT
			*
		FROM
			faa_test
		WHERE
			Test_Number = '$Test_Number'");
		$temp  = mysql_fetch_array( $result );
		return $temp['Max_Score'];
	}
?>

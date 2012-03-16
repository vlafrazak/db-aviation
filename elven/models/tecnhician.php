<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

    function technicianSpeciality($Tech_Code)
	{
		$result = mysql_query(
		"SELECT
			aircraft_model.Model_Name,
			aircraft_model.Model_Code,
			aircraft_model.Manufacturer
		FROM
		   technicians CROSS JOIN aircraft_model CROSS JOIN is_expert_in ON
				technicians.Tech_Code = is_expert_in.Tech_Code AND 
				is_expert_in.Model_Code = aircraft_model.Model_Code
		WHERE technicians.Tech_Code = '$Tech_Code'
		ORDER BY
			Model_Name");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Model_Code' ] ] = $temp;
        }
        return $rows_returned;
	}

    function technicianListing()
    {
        $result = mysql_query(
		"SELECT
			employees.Emp_Code,
			employees.UMN,
			employees.First_Name,
			employees.Surname
		FROM
		   employees CROSS JOIN technicians ON
			employees.Emp_Code = technicians.Tech_Code
		ORDER BY
			UMN");
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Emp_Code' ] ] = $temp;
        }
        return $rows_returned;
    }

    function specialityDelete($Tech_Code,$Model_Code)
    {
        mysql_query(
            "DELETE FROM
                is_expert_in
            WHERE
                Model_Code = ' $Model_Code ' AND Tech_Code = '$Tech_Code'"
        );
    }
	
	function technicianCoworker($Tech_Code,$Model_Code)
	{
		$result = mysql_query(
		"SELECT
			employees.First_Name,
			employees.Surname,
			employees.UMN
		FROM
		   employees CROSS JOIN technicians CROSS JOIN is_expert_in ON
				technicians.Tech_Code = is_expert_in.Tech_Code AND 
				technicians.Tech_Code = employees.Emp_Code
		WHERE technicians.Tech_Code != '$Tech_Code' AND is_expert_in.Model_Code = '$Model_Code'
		ORDER BY
			UMN");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'UMN' ] ] = $temp;
        }
        return $rows_returned;
	}

	function new_specialities($Tech_Code)
	{
		$result = mysql_query("
		SELECT
			Model_Code,
			Model_Name,
			Manufacturer
		FROM 
			aircraft_model
		WHERE Model_Code NOT IN (SELECT
									Model_Code
								FROM
									is_expert_in
								WHERE Tech_Code = '$Tech_Code')
		ORDER BY 
			Manufacturer");
		$rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Model_Code' ] ] = $temp;
        }
        return $rows_returned;
	}
	function addSpeciality($new_spec,$Tech_Code)
	{
		mysql_query("
		INSERT INTO
			is_expert_in
		SET
			Tech_Code = '$Tech_Code',
			Model_Code = '$new_spec'
		");
	}
?>

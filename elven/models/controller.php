<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

	function updateExamdate($Contr_Code,$New_Exam_Date)
	{
		mysql_query("
		UPDATE
			controllers
		SET
			Last_Exam_Date = '$New_Exam_Date'
		WHERE
			Contr_Code = '$Contr_Code'");
		
	}

    function controllerListing()
    {
        $result = mysql_query(
		"SELECT
			employees.Emp_Code,
			employees.UMN,
			employees.First_Name,
			employees.Surname,
			controllers.Last_Exam_Date
		FROM
		   employees CROSS JOIN controllers ON
			employees.Emp_Code = controllers.Contr_Code
		ORDER BY
			UMN");
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'Emp_Code' ] ] = $temp;
        }
        return $rows_returned;
    }
	
?>

<?php
    mysql_connect( "localhost", "root", "87654321" ) or die( mysql_error() );
    mysql_select_db( "el_venizelos" ) or die( mysql_error() );

    mysql_query( "SET NAMES UTF8;" );

    function employeeCreate( $First_Name,$Surname,$UMN,$SSN,$Street_Name,$Street_Number,$Postal_Code,$Salary,$job,$date )
    {
		preg_match_all('/[a-z]|[A-Z]/', $First_Name, $matches);
		$count = count($matches[0]);
		$length = strlen($First_Name);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[a-z]|[A-Z]/', $Surname, $matches);
		$count = count($matches[0]);
		$length = strlen($Surname);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[0-9]/', $UMN, $matches);
		$count = count($matches[0]);
		$length = strlen($UMN);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[0-9]/', $SSN, $matches);
		$count = count($matches[0]);
		$length = strlen($SSN);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[a-z]|[A-Z]/', $Street_Name, $matches);
		$count = count($matches[0]);
		$length = strlen($Street_Name);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[0-9]/', $Street_Number, $matches);
		$count = count($matches[0]);
		$length = strlen($Street_Number);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[0-9]/', $Postal_Code, $matches);
		$count = count($matches[0]);
		$length = strlen($Postal_Code);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		if(($Postal_Code>99999)||($Postal_Code<10000)){
			Redirect( 'employee/create?error');
		}
		preg_match_all('/[0-9]/', $Salary, $matches);
		$count = count($matches[0]);
		$length = strlen($Salary);
		if($count!=$length){
			Redirect( 'employee/create?error');
		}
		if ($job == "controller"){
			preg_match_all('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', $date, $matches);
			$count = count($matches[0]);
			$length = strlen($date);
			if(($count!=1)||($length != 10)){
				Redirect( 'employee/create?error');
			}
		}
        $error_insert = mysql_query(
            "INSERT INTO
                employees
            SET
                UMN = '$UMN',
                SSN = '$SSN',
                First_Name = '$First_Name',
                Surname = '$Surname',
                Street_Name = '$Street_Name',
                Street_Number = '$Street_Number',
                Postal_Code = '$Postal_Code',
                Salary = '$Salary'"
            );
		if( $error_insert==FALSE )  {
			Redirect( 'employee/create?error');
		}
		if ($job=="tech"){
			$emp_code = mysql_query(
			"SELECT
				Emp_Code
			FROM
				employees
			WHERE UMN = ' $UMN '");
			$balls = mysql_fetch_array( $emp_code );
			$emp_code=$balls['Emp_Code'];
			mysql_query(
			"INSERT INTO
				technicians
			SET
				Tech_Code = '$emp_code'"
			);
		}
		else if($job=="controller"){
			if (empty($date)) {$date='1000-01-01';};
			$emp_code = mysql_query(
			"SELECT
				Emp_Code
			FROM
				employees
			WHERE UMN = ' $UMN '");
			$balls = mysql_fetch_array( $emp_code );
			$emp_code=$balls['Emp_Code'];
			mysql_query(
			"INSERT INTO
				controllers
			SET
				Contr_Code = '$emp_code',
				Last_Exam_Date = '$date'"
			);
		}
    }

    function employeeListing()
    {
        $result = mysql_query(
            "SELECT
                *
            FROM
                employees
            ORDER BY UMN"
        );
        $rows_returned = array();
        while ( $temp  = mysql_fetch_array( $result ) )
        {
            $rows_returned[ $temp[ 'UMN' ] ] = $temp;
        }
        return $rows_returned;
    }

    function employeeDelete( $UMN )
    {
        mysql_query(
            "DELETE FROM
                employees
            WHERE
                UMN = '$UMN'"
        );
    }
	
	
	function employeeUpdateFetch($UMN)
	{
		$result = mysql_query(
			"SELECT
                *
            FROM
                employees
            WHERE UMN = '$UMN'"
        );
		$rows_returned = array();
        $rec  = mysql_fetch_array( $result );
		$blow = $rec[ 'Emp_Code' ];
		$res = mysql_query(
			"SELECT
				*
			FROM
				technicians
			WHERE Tech_Code = '$blow'"
		);
		$temp = mysql_fetch_array($res);
		if (empty($temp)){
			$rec['job']="controller";
			$temp = mysql_query(
			"SELECT
				*
			FROM
				controllers
			WHERE Contr_Code = '$blow'");
			$contr_found = mysql_fetch_array($temp);
			$rec['Date_exam'] = $contr_found['Last_Exam_Date'];
		}
		else
			$rec['job']="tech";
        return $rec;
	}

	function employeeUpdate( $First_Name,$Surname,$UMN,$SSN,$Street_Name,$Street_Number,$Postal_Code,$Salary,$job,$Date_exam,$Emp_Code )
	{
		preg_match_all('/[a-z]|[A-Z]/', $First_Name, $matches);
		$count = count($matches[0]);
		$length = strlen($First_Name);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[a-z]|[A-Z]/', $Surname, $matches);
		$count = count($matches[0]);
		$length = strlen($Surname);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[0-9]/', $UMN, $matches);
		$count = count($matches[0]);
		$length = strlen($UMN);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[0-9]/', $SSN, $matches);
		$count = count($matches[0]);
		$length = strlen($SSN);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[a-z]|[A-Z]/', $Street_Name, $matches);
		$count = count($matches[0]);
		$length = strlen($Street_Name);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[0-9]/', $Street_Number, $matches);
		$count = count($matches[0]);
		$length = strlen($Street_Number);
		if($count!=$length){
			return FALSE;
		}
		preg_match_all('/[0-9]/', $Postal_Code, $matches);
		$count = count($matches[0]);
		$length = strlen($Postal_Code);
		if($count!=$length){
			return FALSE;
		}
		if(($Postal_Code>99999)||($Postal_Code<10000)){
			return FALSE;
		}
		preg_match_all('/[0-9]/', $Salary, $matches);
		$count = count($matches[0]);
		$length = strlen($Salary);
		if($count!=$length){
			return FALSE;
		}
		$result = mysql_query(
			"SELECT
                *
            FROM
                technicians
            WHERE Tech_Code = ' $Emp_Code '"
        );
		$found = mysql_fetch_array($result);
		if (empty($found))
			$prev_occup="controller";
		else
			$prev_occup="tech";
		if ($prev_occup!=$job){
			if($prev_occup=="tech"){
				if (empty($Date_exam)) {
					$Date_exam='1000-01-01';
				}
				else{
					preg_match_all('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', $Date_exam, $matches);
					$count = count($matches[0]);
					$length = strlen($Date_exam);
					if(($count!=1)||($length != 10)){
						return FALSE;
					}
				}
				mysql_query(
				"INSERT INTO
					controllers
				SET
					Contr_Code = '$Emp_Code',
					Last_Exam_Date = '$Date_exam'"
				);
				mysql_query(
					"DELETE FROM
						technicians
					WHERE
						Tech_Code = '$Emp_Code'"
				);
			}
			else{
				mysql_query(
					"DELETE FROM
						controllers
					WHERE
						Contr_Code = '$Emp_Code'"
				);
				mysql_query(
				"INSERT INTO
					technicians
				SET
					Tech_Code = '$Emp_Code'"
				);
			}
		}
		else if($job=="controller")
		{
			
			$old_date = mysql_query(
				"SELECT
					*
				FROM
					controllers
				WHERE Contr_Code = '$Emp_Code'"
			);
			$old_date = mysql_fetch_array($old_date);
			$old_date = $old_date['Last_Exam_Date'];
			if (empty($Date_exam)) {
				return FALSE;
			}
			else{
				preg_match_all('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', $Date_exam, $matches);
				$count = count($matches[0]);
				$length = strlen($Date_exam);
				if(($count!=1)||($length != 10)){
					return FALSE;
				}
			}
			if ($old_date <= $Date_exam){
				mysql_query(
				"UPDATE
					controllers
				SET
					Last_Exam_Date = '$Date_exam'
				WHERE Contr_Code = '$Emp_Code'");
			}
			else
				return FALSE;
		}
		mysql_query(
			"UPDATE
				employees
			SET
				UMN = '$UMN',
				SSN = '$SSN',
				First_Name = '$First_Name',
				Surname = '$Surname',
				Street_Name = '$Street_Name',
				Street_Number = '$Street_Number',
				Postal_Code = '$Postal_Code',
				Salary = '$Salary'
			WHERE Emp_Code = '$Emp_Code'");
		return TRUE;
	}
?>

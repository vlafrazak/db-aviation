<?php
    class EmployeeController {
        public static function listing() {
            $employees = employeeListing();
            view( 'employee/listing', array( 'employees' => $employees ) );
        }
        public static function createView( ) {
            view( 'employee/create' );
        }
        public static function create( $First_Name,$Surname,$UMN,$SSN,$Street_Name,$Street_Number,$Postal_Code,$Salary,$job,$Date_exam ) {
            $errors = array();
			if ( empty( $First_Name ) ) {
                $errors[] = 'First Name';
            }
            if ( empty( $Surname ) ) {
                $errors[] = 'Surname';
            }
			if ( empty( $UMN ) ) {
                $errors[] = 'UMN';
            }
			if ( empty( $SSN ) ) {
                $errors[] = 'SSN';
            }
			if ( empty( $Street_Name ) ) {
                $errors[] = 'Street_Name';
            }
			if ( empty( $Street_Number ) ) {
                $errors[] = 'Street_Number';
            }
			if ( empty( $Postal_Code ) ) {
                $errors[] = 'Postal_Code';
            }
			if ( empty( $Salary ) ) {
                $errors[] = 'Salary';
            }
			if ( empty( $job ) ) {
                $errors[] = 'job';
            }
            if ( !empty( $errors )||($job=="no" ) ) {
                Redirect( 'employee/create?error');
            }
            employeeCreate( $First_Name,$Surname,$UMN,$SSN,$Street_Name,$Street_Number,$Postal_Code,$Salary,$job,$Date_exam );
			Redirect( 'employee/listing' );
        }
		public static function delete($UMN){			
			employeeDelete($UMN);
			Redirect ( 'employee/listing' );
		}
		public static function update ($First_Name,$Surname,$UMN,$SSN,$Street_Name,$Street_Number,$Postal_Code,$Salary,$job,$Date_exam,$Emp_Code ){
			if (!isset($First_Name)){
				$rec = employeeUpdateFetch($UMN);
				$rec['Delfini']="";
				view( 'employee/update', $rec );
			}
			else{
				$all_ok = TRUE;
				$errors = array();
				if ( empty( $First_Name ) ) {
					$errors[] = 'First Name';
				}
				if ( empty( $Surname ) ) {
					$errors[] = 'Surname';
				}
				if ( empty( $UMN ) ) {
					$errors[] = 'UMN';
				}
				if ( empty( $SSN ) ) {
					$errors[] = 'SSN';
				}
				if ( empty( $Street_Name ) ) {
					$errors[] = 'Street_Name';
				}
				if ( empty( $Street_Number ) ) {
					$errors[] = 'Street_Number';
				}
				if ( empty( $Postal_Code ) ) {
					$errors[] = 'Postal_Code';
				}
				if ( empty( $Salary ) ) {
					$errors[] = 'Salary';
				}
				if ( empty( $job ) ) {
					$errors[] = 'job';
				}
				if ( !empty( $errors )||($job=="no" ) ) {
					$all_ok = FALSE;
				}
				if ($all_ok==TRUE)
					$all_ok = employeeUpdate( $First_Name,$Surname,$UMN,$SSN,$Street_Name,$Street_Number,$Postal_Code,$Salary,$job,$Date_exam,$Emp_Code );
				if ($all_ok==FALSE){
					$rec = employeeUpdateFetch($UMN);
					$rec['Delfini']="ΣΦΑΛΜΑ κατα την ενημέρωση!";
					view( 'employee/update', $rec );
				}
				else
					Redirect( 'employee/listing' );
			}
		}
	}
?>
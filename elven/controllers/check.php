<?php
    class CheckController {
        public static function listing() {
            $checks = checkListing();
            view( 'check/listing', array( 'checks' => $checks ) );
        }
        public static function createView() {
            view( 'check/create' );
        }
        public static function create( $Test_Name,$Max_Score) {
            $errors = array();
			if ( empty( $Test_Name ) ) {
                $errors[] = 'Test_Name';
            }
            if ( empty( $Max_Score ) ) {
                $errors[] = 'Max_Score';
            }
            if ( !empty( $errors ) ) {
                Redirect( 'check/create?error');
            }
            checkCreate($Test_Name,$Max_Score);
			Redirect( 'check/listing' );
        }
		public static function delete($Test_Number){			
			checkDelete($Test_Number);
			Redirect ( 'check/listing' );
		}
		public static function update ( $Test_Name,$Max_Score,$Test_Number){
			if (!isset($Test_Name)){
				$rec = checkUpdateFetch($Test_Number);
				$rec['Delfini']="";
				view( 'check/update', $rec );
			}
			else{
				$all_ok = TRUE;
				$errors = array();
				if ( empty( $Test_Name ) ) {
					$errors[] = 'Test_Name';
				}
				if ( empty( $Max_Score ) ) {
					$errors[] = 'Max_Score';
				}
				if ( !empty( $errors ) ) {
					$all_ok = FALSE;
				}
				if ($all_ok==TRUE)
					$all_ok = checkUpdate($Test_Name,$Max_Score,$Test_Number);
				if ($all_ok==FALSE){
					$rec = checkUpdateFetch($Test_Number);
					$rec['Delfini']="ΣΦΑΛΜΑ κατά την ενημέρωση!";
					view( 'check/update', $rec );
				}
				else
					Redirect( 'check/listing' );
			}
		}
	}
?>
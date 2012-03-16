<?php
    class AirplaneController {
        public static function listing() {
            $airplanes = airplaneListing();
            view( 'airplane/listing', array( 'airplanes' => $airplanes ) );
        }
        public static function createView() {
            view( 'airplane/create' );
        }
        public static function create( $Model_Name,$Capacity,$Weight,$Manufacturer ) {
            $errors = array();
			if ( empty( $Model_Name ) ) {
                $errors[] = 'Model_Name';
            }
            if ( empty( $Capacity ) ) {
                $errors[] = 'Capacity';
            }
			if ( empty( $Weight ) ) {
                $errors[] = 'Weight';
            }
			if ( empty( $Manufacturer ) ) {
                $errors[] = 'Manufacturer';
            }
            if ( !empty( $errors ) ) {
                Redirect( 'airplane/create?error');
            }
            airplaneCreate( $Model_Name,$Capacity,$Weight,$Manufacturer );
			Redirect( 'airplane/listing' );
        }
		public static function delete($Model_Code){			
			airplaneDelete($Model_Code);
			Redirect ( 'airplane/listing' );
		}
		public static function update ( $Model_Name,$Capacity,$Weight,$Manufacturer,$Model_Code ){
			if (!isset($Model_Name)){
				$rec = airplaneUpdateFetch($Model_Code);
				$rec['Delfini']="";
				view( 'airplane/update', $rec );
			}
			else{
				$all_ok = TRUE;
				$errors = array();
				if ( empty( $Model_Name ) ) {
					$errors[] = 'Model_Name';
				}
				if ( empty( $Capacity ) ) {
					$errors[] = 'Capacity';
				}
				if ( empty( $Weight ) ) {
					$errors[] = 'Weight';
				}
				if ( empty( $Manufacturer ) ) {
					$errors[] = 'Manufacturer';
				}
				if ( !empty( $errors ) ) {
					$all_ok = FALSE;
				}
				if($all_ok ==TRUE) $all_ok = airplaneUpdate( $Model_Name,$Capacity,$Weight,$Manufacturer,$Model_Code );
				if ($all_ok==FALSE){
					$rec = airplaneUpdateFetch($Model_Code);
					$rec['Delfini']="ΣΦΑΛΜΑ κατά την εισαγωγή!";
					view( 'airplane/update', $rec );
				}
				else
					Redirect( 'airplane/listing' );
			}
		}
	}
?>
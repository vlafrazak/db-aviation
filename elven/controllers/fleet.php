<?php
    class FleetController {
        public static function listing() {
            $fleets = fleetListing();
            view( 'fleet/listing', array( 'fleets' => $fleets ) );
        }
		
        public static function create($Registration_Number,$Air_Carrier,$Construction_Date,$Model_Code ) {
            if(empty($Model_Code)){
				$models = aircraftModels();
				view( 'fleet/create',array( 'models' => $models,
											'dolphins' => "") );
			}
			else{
			
				if ( empty( $Registration_Number ) ) {
					$predolphin= "Σφάλμα: Ασυμπλήρωτος Αριθμός Κυκλοφορίας";
				}
				if ( empty( $Air_Carrier ) ) {
					$predolphin= "Σφάλμα: Ασυμπλήρωτο πεδίο Εταιρείας";
				}
				if ( empty( $Construction_Date ) ) {
					$predolphin= "Σφάλμα: Ασυμπλήρωτο πεδίο Ημ/νιας κατασκευής";
				}
				if ( $Model_Code == "no") {
					$predolphin= "Σφάλμα: Αδύνατον να καταχωρηθεί μοντέλο!";
				}
				if(!isset($predolphin)){
					preg_match_all('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', $Construction_Date, $matches);
					$count = count($matches[0]);
					$length = strlen($Construction_Date);
					if(($count!=1)||($length != 10)){
						$predolphin="Μορφή Ημ/νιας:YYYY-MM-DD";
					}
				}
				if(!isset($predolphin)){
					$mpoulhs = fleetCreate($Registration_Number,$Air_Carrier,$Construction_Date,$Model_Code);
					if($mpoulhs == TRUE){
						$fleets = fleetListing();
						view( 'fleet/listing', array( 'fleets' => $fleets ) );
					}
					else
						$predolphin= "Σφάλμα: Μη πρωτότυπος αριθμός κυκλοφορίας!";
				}
				if(isset($predolphin)){
					$models = aircraftModels();
					 view( 'fleet/create',array( 'models' => $models,
												 'dolphins' => $predolphin) );
				}
			}
        }
		
		public static function delete($Registration_Number){			
			fleetDelete($Registration_Number);
			Redirect ( 'fleet/listing' );
		}

		public static function update ($Old_Registration_Number,$Registration_Number,$Air_Carrier,$Construction_Date,$Model_Code ) {
			if(empty($Model_Code)){
				$models = aircraftModels();
				$info = updateFetch($Registration_Number);
				view( 'fleet/update',array( 'models' => $models,
											'Registration_Number' => $info['Registration_Number'],
											'Air_Carrier' => $info['Air_Carrier'],
											'Construction_Date' => $info['Construction_Date'],
											'Model_Code' => $info['Model_Code'],
											'dolphins' => "") );
			}
			else{
				if ( empty( $Registration_Number ) ) {
					$predolphin= "Σφάλμα: Ασυμπλήρωτος Αριθμός Κυκλοφορίας";
				}
				if ( empty( $Air_Carrier ) ) {
					$predolphin= "Σφάλμα: Ασυμπλήρωτο πεδίο Εταιρείας";
				}
				if ( empty( $Construction_Date ) ) {
					$predolphin= "Σφάλμα: Ασυμπλήρωτο πεδίο Ημ/νιας κατασκευής";
				}
				if ( $Model_Code == "no") {
					$predolphin= "Σφάλμα: Αδύνατον να καταχωρηθεί μοντέλο!";
				}
				if(!isset($predolphin)){
					preg_match_all('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', $Construction_Date, $matches);
					$count = count($matches[0]);
					$length = strlen($Construction_Date);
					if(($count!=1)||($length != 10)){
						$predolphin="Μορφή Ημ/νιας:YYYY-MM-DD";
					}
				}
				if(!isset($predolphin)){
					$mpoulhs = fleetUpdate($Old_Registration_Number,$Registration_Number,$Air_Carrier,$Construction_Date,$Model_Code);
					if($mpoulhs == TRUE){
						$fleets = fleetListing();
						view( 'fleet/listing', array( 'fleets' => $fleets ) );
					}
					else
						$predolphin= "Σφάλμα: Μη πρωτότυπος αριθμός κυκλοφορίας!";
				}
				if(isset($predolphin)){
					$models = aircraftModels();
					$info = updateFetch($Old_Registration_Number);
					view( 'fleet/update',array( 'models' => $models,
											'Registration_Number' => $info['Registration_Number'],
											'Air_Carrier' => $info['Air_Carrier'],
											'Construction_Date' => $info['Construction_Date'],
											'Model_Code' => $info['Model_Code'],
											'dolphins' => $predolphin) );
				}
			}
		}
	}
?>
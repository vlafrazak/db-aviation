<?php
    class TechnicianController {
        public static function listing() {
            $technicians = technicianListing();
            view( 'technician/listing', array( 'technicians' => $technicians, ) );
        }
        public static function createView() {
            view( 'technician/create' );
        }
		public static function view($Tech_Code,$First_Name,$Surname,$UMN){
			$specialties = technicianSpeciality($Tech_Code);
			view( 'technician/view',array( 'specialties' => $specialties, 
											'First_Name' =>	$First_Name,
											'Surname' => $Surname,
											'Tech_Code' => $Tech_Code,
											'UMN' => $UMN,
											'dolphins' => "") );
		}
		
        public static function update($Tech_Code,$Model_Code,$First_Name,$Surname,$UMN){
			$coworkers = technicianCoworker($Tech_Code,$Model_Code);
			view( 'technician/update',array( 'coworkers' => $coworkers, 
											'First_Name' =>	$First_Name,
											'Surname' => $Surname,
											'Tech_Code' => $Tech_Code,
											'UMN' => $UMN) );
		}
		public static function delete($Tech_Code,$Model_Code,$First_Name,$Surname,$UMN){
			specialityDelete($Tech_Code,$Model_Code);
			$specialties = technicianSpeciality($Tech_Code);
			view( 'technician/view',array( 'specialties' => $specialties, 
											'First_Name' =>	$First_Name,
											'Surname' => $Surname,
											'Tech_Code' => $Tech_Code,
											'UMN' => $UMN,
											'dolphins' => "") );
		}
		public static function create($new_spec,$Tech_Code,$First_Name,$Surname,$UMN){
			if(empty($new_spec)){
				$specialties = new_specialities($Tech_Code);
				if (empty($specialties)){
					$specialties = technicianSpeciality($Tech_Code);
					view( 'technician/view',array( 'specialties' => $specialties, 
													'First_Name' =>	$First_Name,
													'Surname' => $Surname,
													'Tech_Code' => $Tech_Code,
													'UMN' => $UMN,
													'dolphins' => "Ο Τεχνικός έχει όλες τις ειδικότητες!") );
				}
				else{
					view( 'technician/create',array( 'specialties' => $specialties, 
													'First_Name' =>	$First_Name,
													'Surname' => $Surname,
													'Tech_Code' => $Tech_Code,
													'UMN' => $UMN ));
				}
			}
			else{
				if($new_spec=="no"){
					$specialties = technicianSpeciality($Tech_Code);
					view( 'technician/view',array( 'specialties' => $specialties, 
													'First_Name' =>	$First_Name,
													'Surname' => $Surname,
													'Tech_Code' => $Tech_Code,
													'UMN' => $UMN,
													'dolphins' => "") );
				}
				else{
					addSpeciality($new_spec,$Tech_Code);
					$specialties = technicianSpeciality($Tech_Code);
					view( 'technician/view',array( 'specialties' => $specialties, 
													'First_Name' =>	$First_Name,
													'Surname' => $Surname,
													'Tech_Code' => $Tech_Code,
													'UMN' => $UMN,
													'dolphins' => "") );
				}
			}
		}
	}
?>
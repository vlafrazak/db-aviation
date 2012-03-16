<?php
    class ControllerController {
        public static function listing() {
            $controllers = controllerListing();
            view( 'controller/listing', array( 'controllers' => $controllers, ) );
        }
        public static function update($Contr_Code,$First_Name,$Surname,$UMN,$Last_Exam_Date){
			view( 'controller/update',array('First_Name' =>	$First_Name,
											'Surname' => $Surname,
											'Contr_Code' => $Contr_Code,
											'UMN' => $UMN,
											'Last_Exam_Date' => $Last_Exam_Date,
											'dolphins' => ""));
		}
		public static function create($New_Exam_Date,$Contr_Code,$First_Name,$Surname,$UMN,$Last_Exam_Date){
			$error=FALSE;
			if (empty($New_Exam_Date))
				$predolphin="Παρακαλώ εισάγετε Ημερομηνία!";
			if(!isset($predolphin)){
				preg_match_all('/([0-9]{4})-([0-9]{2})-([0-9]{2})/', $New_Exam_Date, $matches);
				$count = count($matches[0]);
				$length = strlen($New_Exam_Date);
				if(($count!=1)||($length != 10)){
					$predolphin="Μορφή Ημ/νιας:YYYY-MM-DD";
				}
			}
			if(!isset($predolphin))
				if($New_Exam_Date<$Last_Exam_Date)
					$predolphin = "Η καινούργια ημ/νια πρέπει να είναι μεταγενέστερη της τρέχουσας!";
			if(!isset($predolphin)){
				updateExamdate($Contr_Code,$New_Exam_Date);
				$controllers = controllerListing();
				view( 'controller/listing', array( 'controllers' => $controllers, ) );
			}
			else{
				view( 'controller/update',array('First_Name' =>	$First_Name,
												'Surname' => $Surname,
												'Contr_Code' => $Contr_Code,
												'UMN' => $UMN,
												'Last_Exam_Date' => $Last_Exam_Date,
												'dolphins' => $predolphin));
			}
		}
	}
?>
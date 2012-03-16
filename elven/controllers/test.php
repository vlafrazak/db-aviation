<?php
    class TestController {
        public static function listing() {
            $tests = testListing();
            view( 'test/listing', array( 'tests' => $tests ) );
        }
		
        public static function create($Registration_Number,$Manufacturer,$Model_Name,$Model_Code) {
            $faa_tests = findFaas();
			if (empty($faa_tests))
				$predolphins = "ΠΡΟΣΟΧΗ! Δεν υπαρχουν καταχωρημένοι Ομοσπονδιακοί Έλεγχοι!";
			if(empty($predolphins)){
				$techn_cum = findTechnicians($Model_Code);
				if (empty($techn_cum))
					$predolphins = "ΠΡΟΣΟΧΗ! Δεν υπαρχουν τεχνικοί εξειδικευμένοι στο μοντέλο αυτό!";
			}
			if(empty($predolphins))
				view( 'test/create', array( 'faa_tests' => $faa_tests,
											'techn_cum' => $techn_cum,
											'Registration_Number' => $Registration_Number,
											'Manufacturer' => $Manufacturer,
											'Model_Name' => $Model_Name,
											'Model_Code' => $Model_Code,
											'dolphins' => "") );
			else
				view( 'test/create', array( 'faa_tests' => $faa_tests,
											'techn_cum' => $techn_cum,
											'Registration_Number' => $Registration_Number,
											'Manufacturer' => $Manufacturer,
											'Model_Name' => $Model_Name,
											'Model_Code' => $Model_Code,
											'dolphins' => $predolphins) );
        }
		
		public static function delete($Registration_Number,$Manufacturer,$Model_Name,$Test_Number,$Emp_Code,$Check_ID){			
			testDelete($Registration_Number,$Test_Number,$Emp_Code,$Check_ID);
			$viewTests = testView($Registration_Number);
			view( 'test/view', array( 	'viewTests' => $viewTests,
										'Registration_Number' => $Registration_Number,
										'Manufacturer' => $Manufacturer,
										'Model_Name' => $Model_Name) );
		}

		public static function view($Registration_Number,$Manufacturer,$Model_Name){
			$viewTests = testView($Registration_Number);
			view( 'test/view', array( 	'viewTests' => $viewTests,
										'Registration_Number' => $Registration_Number,
										'Manufacturer' => $Manufacturer,
										'Model_Name' => $Model_Name) );	
		}
	
		public static function update($Test_Number,$Tech_Code,$hours,$mins,$score,$Registration_Number,$Manufacturer,$Model_Name,$Model_Code){
			if ($Test_Number=="no")
				$predolphins = "Παραλείψατε τον έλεγχο που πρέπει να γίνει!";
			if ($Tech_Code == "no")
				$predolphins = "Παραλείψατε τον τεχνικό που θα κάνει τον έλεγχο!";
			if(empty($hours))
					$predolphins="Παραλείψατε τις ώρες!";
			if (empty($predolphins)){
				preg_match_all('/([0-9])/', $hours, $matches);
				$count = count($matches[0]);
				$length = strlen($hours);
				if(($count!=2)||($length != $count)){
					$predolphins="Εισάγετε έγγυρο αριθμό ωρών";
				}
			}
			if(empty($mins))
				$predolphins="Παραλείψατε τα λεπτά!";
			if (empty($predolphins)){
				preg_match_all('/([0-9])/', $mins, $matches);
				$count = count($matches[0]);
				$length = strlen($mins);
				if(($count!=2)||($length != $count)){
					$predolphins="Εισάγετε έγγυρο αριθμό λεπτών";
				}
				if (empty($predolphins)){
					if ($mins > 60)
						$predolphins="Εισάγετε έγγυρο αριθμό λεπτών";
				}
			}
			if(empty($score))
				$predolphins="Παραλείψατε το σκορ!";
			if (empty($predolphins)){
				preg_match_all('/([0-9])/', $score, $matches);
				$count = count($matches[0]);
				$length = strlen($score);
				if($length != $count){
					$predolphins="Εισάγετε έγγυρο σκορ!";
				}
				if (empty($predolphins)){
					if ($score > $max_score = findScore($Test_Number))
						$predolphins="Το σκορ που βάλατε ξεπερνά το επιτρεπτό σκορ: ".$max_score;
				}
			}
			if (empty($predolphins)){
				$zero = 0;
				$time = $hours.$mins.$zero.$zero;
				$res = testAdd($Registration_Number,$Test_Number,$Tech_Code,$time,$score);
				if ($res == 1)
					$predolphins = "Εχει γίνει ο ίδιος έλεγχος στο ίδιο αεροσκάφος απο τον ίδιο τεχνικό!";
				if (empty($predolphins)){
					$viewTests = testView($Registration_Number);
					view( 'test/view', array( 	'viewTests' => $viewTests,
												'Registration_Number' => $Registration_Number,
												'Manufacturer' => $Manufacturer,
												'Model_Name' => $Model_Name) );
				}								
			}
			if (!empty($predolphins)){
				$faa_tests = findFaas();
				$techn_cum = findTechnicians($Model_Code);
				view( 'test/create', array( 'faa_tests' => $faa_tests,
											'techn_cum' => $techn_cum,
											'Registration_Number' => $Registration_Number,
											'Manufacturer' => $Manufacturer,
											'Model_Name' => $Model_Name,
											'Model_Code' => $Model_Code,
											'dolphins' => $predolphins) );
			}
		}
	}
?>
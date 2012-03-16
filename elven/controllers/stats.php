<?php
    class StatsController {
	
        public static function listing( ) {
			$emps = employeesCount();
            $planes = planesListing();
			
            view( 'stats/listing', array( 	//'checks' => $checks,
											'planes' => $planes,
											'emps' => $emps) );
		}
		public static function update( $Base ) {
			preg_match_all('/[0-9]/', $Base, $matches);
			$count = count($matches[0]);
			$length = strlen($Base);
			$emps = employeesCount();
            $planes = planesListing();
			$predolphins = "Δώσε θετικό ακέραιο!!!";
			if($count!=$length){
				$ready = FALSE;
				view( 'stats/update', array( 	'planes' => $planes,
												'emps' => $emps,
												'ready' => $ready,
												'dolphins' => $predolphins) );
			}
			else{
				$techs = statsSearch( $Base );
				$ready = TRUE;
				view( 'stats/update', array( 	'planes' => $planes,
												'emps' => $emps,
												'ready' => $ready,
												'techs' => $techs,
												'base' => $Base,
												'dolphins' => "") );
			}
		}
		
	}	
?>
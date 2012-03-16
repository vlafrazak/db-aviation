<?php
    class UnionController {
        public static function listing() {
            $employees = unionListing();
            view( 'union/listing', array( 'employees' => $employees ) );
        }
	}
?>
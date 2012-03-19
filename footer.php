<!--shuffle names-->

        <div id="footer"><p>Credits: 

<?php
            $contributors = array(
                'Lydia Zak' => 'lydiazak90@gmail.com',
                'Iren Vlsi' =>  'iren.vlsi@gmail.com',
                'Valia Fragkia' => 'valia.fragiad@gmail.com'
            );
            shuffle( $contributors );
            $items = array();
            foreach ( $contributors as $contributor => $url ) {
                if ( is_numeric( $contributor ) ) {
                    $contributor = $url;
                }
                $items[] = '<a href="mailto' . $url . '">' . $contributor . '</a>';
            }
            echo implode( ', ', $items );
            ?>.

  	</div><!-- End of footer-->	
	</body> <!--end of title and menu-->
</html>


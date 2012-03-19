<!--shuffle names : Credits to Vasilhs-->

        <div id="footer"><p>Credits: 

<?php
            $contributors = array(
                'Lydia Zak' => 'lydiazak90@gmail.com',
                'Iren Vlsi' =>  'iren.vlsi@gmail.com',
                'Valia Fragkia' => 'valia.fragiad@gmail.com'
            );
            shuffle( $contributors );
            foreach ( $contributors as $contributor => $url ) {
                    if ($url == 'lydiazak90@gmail.com'){
                        echo '<a href="mailto:' . $url . '">' . 'Lydia Zak </a>';
                    }
                    else if ($url == 'iren.vlsi@gmail.com'){
                        echo '<a href="mailto:' . $url . '">' . 'Iren Vlsi </a>';
                    }
                    else {
                        echo '<a href="mailto:' . $url . '">' . 'Valia Fragk </a>';
                    }
            }
            ?>

  	</div><!-- End of footer-->	
	</body> <!--end of title and menu-->
</html>


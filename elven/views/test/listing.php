<h1>Έλεγχοι που έχουν πραγματοποιηθεί</h1>
<table>
    <thead>
        <tr>
            <th>Αριθμός Κυκλοφορίας</th>
            <th>Αεροπορική Εταιρεία</th>
            <th>Ημ/νια κατασκευής</th>
            <th>Μοντέλο(Κατασκευαστής - Μοντέλο)</th></th>
            <th class='update'>Προβολή Ελέγχων</th>
			<th class='delete'>Νέος Έλεγχος</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $tests as $test_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $test_c[ 'Registration_Number' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $test_c[ 'Air_Carrier' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $test_c[ 'Construction_Date' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $test_c[ 'Manufacturer' ] . " " . $test_c[ 'Model_Name' ];
                        ?>
                    </td>
                    <td>
                        <form action='test/view' method='post' class='view'>
                            <input type='hidden' name='Registration_Number' value='<?php
                            echo $test_c[ 'Registration_Number' ];
                            ?>' />
							<input type='hidden' name='Manufacturer' value='<?php
                            echo $test_c[ 'Manufacturer' ];
                            ?>' />
							<input type='hidden' name='Model_Name' value='<?php
                            echo $test_c[ 'Model_Name' ];
                            ?>' />
                            <input type='submit' value='Έλεγχοι' title='Έλεγχοι' />
                        </form>
                    </td>
					 <td>
                        <form action='test/create' method='post' class='create'>
                            <input type='hidden' name='Registration_Number' value='<?php
                            echo $test_c[ 'Registration_Number' ];
                            ?> ' />
							<input type='hidden' name='Manufacturer' value='<?php
                            echo $test_c[ 'Manufacturer' ];
                            ?>' />
							<input type='hidden' name='Model_Name' value='<?php
                            echo $test_c[ 'Model_Name' ];
                            ?>' />
							<input type='hidden' name='Model_Code' value='<?php
                            echo $test_c[ 'Model_Code' ];
                            ?>' />
                            <input type='submit' value='Νέος Έλεγχος' title='Νέος Έλεγχος' />
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>

<h1>Στόλος</h1>
<table>
    <thead>
        <tr>
            <th>Αριθμός Κυκλοφορίας</th>
            <th>Αεροπορική Εταιρεία</th>
            <th>Ημ/νια κατασκευής</th>
            <th>Μοντέλο(Κατασκευαστής - Μοντέλο)</th></th>
            <th class='update'>Ενημέρωση</th>
			<th class='delete'>Διαγραφή</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $fleets as $flee_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $flee_c[ 'Registration_Number' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $flee_c[ 'Air_Carrier' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $flee_c[ 'Construction_Date' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $flee_c[ 'Manufacturer' ] . " " . $flee_c[ 'Model_Name' ];
                        ?>
                    </td>
                    <td>
                        <form action='fleet/update' method='post' class='update'>
                            <input type='hidden' name='Registration_Number' value='<?php
                            echo $flee_c[ 'Registration_Number' ];
                            ?> ' />
                            <input type='submit' value='Ενημέρωση' title='Ενημέρωση' />
                        </form>
                    </td>
					 <td>
                        <form action='fleet/delete' method='post' class='delete'>
                            <input type='hidden' name='Registration_Number' value='<?php
                            echo $flee_c[ 'Registration_Number' ];
                            ?> ' />
                            <input type='submit' value='Διαγραφή' title='Διαγραφή' />
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<div>
	<form action='fleet/create' method='post' class='create'>
		<input type='submit' value='Προσθήκη νέου αεροσκάφους' title='Προσθήκη νέου αεροσκάφους' />
	</form>
</div>

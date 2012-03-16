<h1>Εξυπηρετούμενα Αεροσκάφη</h1>
<table>
    <thead>
        <tr>
            <th>Όνομα</th>
            <th>Χωρητικότητα(άτομα)</th>
            <th>Βάρος</th></th>
            <th>Κατασκευαστής</th>
			<th>Ενημέρωση</th>
			<th>Διαγραφή</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $airplanes as $air_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $air_c[ 'Model_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $air_c[ 'Capacity' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $air_c[ 'Weight' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $air_c[ 'Manufacturer' ];
                        ?>
                    </td>                    
                    <td>
                        <form action='airplane/update' method='post' class='update'>
                            <input type='hidden' name='Model_Code' value='<?php
                            echo $air_c[ 'Model_Code' ];
                            ?> ' />
                            <input type='submit' value='Ενημέρωση' title='Ενημέρωση' />
                        </form>
                    </td>
					 <td>
                        <form action='airplane/delete' method='post' class='delete'>
                            <input type='hidden' name='Model_Code' value='<?php
                            echo $air_c[ 'Model_Code' ];
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
<p class='create'>
<a href='airplane/create'>Προσθήκη νέου μοντέλου</a></p>

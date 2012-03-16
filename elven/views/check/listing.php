<h1>FAA Έλεγχοι!</h1>
<table>
    <thead>
        <tr>
            <th>Όνομα Ελέγχου</th>
            <th>Μέγιστο Σκορ</th>
			<th>Ενημέρωση</th>
			<th>Διαγραφή</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $checks as $checks_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $checks_c[ 'Test_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $checks_c[ 'Max_Score' ];
                        ?>
                    </td>                  
                    <td>
                        <form action='check/update' method='post' class='update'>
                            <input type='hidden' name='Test_Number' value='<?php
                            echo $checks_c[ 'Test_Number' ];
                            ?> ' />
                            <input type='submit' value='Ενημέρωση' title='Ενημέρωση' />
                        </form>
                    </td>
					 <td>
                        <form action='check/delete' method='post' class='delete'>
                            <input type='hidden' name='Test_Number' value='<?php
                            echo $checks_c[ 'Test_Number' ];
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
<a href='check/create'>Προσθήκη νέου ελέγχου</a></p>

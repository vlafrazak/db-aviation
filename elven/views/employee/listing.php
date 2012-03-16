<h1>Εργαζόμενοι</h1>
<table>
    <thead>
        <tr>
            <th>Όνομα</th>
            <th>Επώνυμο</th>
            <th>UMN</th>
            <th>ΑΦΜ</th></th>
            <th>Όνομα οδού</th>
            <th>Αριθμός</th>
            <th>ΤΚ</th>
            <th>Μισθός</th>
            <th class='update'>Ενημέρωση</th>
			<th class='delete'>Διαγραφή</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $employees as $emp ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $emp[ 'First_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'Surname' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'UMN' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'SSN' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'Street_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'Street_Number' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'Postal_Code' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'Salary' ];
                        ?>
                    </td>
                    <td>
                        <form action='employee/update' method='post' class='update'>
                            <input type='hidden' name='UMN' value='<?php
                            echo $emp[ 'UMN' ];
                            ?> ' />
                            <input type='submit' value='Ενημέρωση εργαζομένου' title='Ενημέρωση' />
                        </form>
                    </td>
					 <td>
                        <form action='employee/delete' method='post' class='delete'>
                            <input type='hidden' name='UMN' value='<?php
                            echo $emp[ 'UMN' ];
                            ?> ' />
                            <input type='submit' value='Διαγραφή εργαζομένου' title='Διαγραφή' />
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<p class='create'>
<a href='employee/create'>Προσθήκη νέου εργαζομένου</a></p>

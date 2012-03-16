<h2>Έλεγχοι που πραγματοποιήθηκαν</h2>
<h3>
	<div>Αεροσκάφος <?php echo $Manufacturer . " " . $Model_Name;?></div>
	<div>Αρ.Κυκλοφορίας:<?php echo $Registration_Number;?></div>
</h3>
<table>
    <thead>
        <tr>
            <th>Έλεγχος</th>
            <th>Υπευθυνός Τεχνικός</th>
            <th>Σκορ</th>
			<th>Διάρκεια ελέγχου</th>
            <th class='update'>Διαγραφή</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $viewTests as $view_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $view_c['Test_Name'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $view_c['Surname'] . " " . $view_c['First_Name'] . " " . $view_c['UMN'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $view_c['Check_Score'] . "/" . $view_c['Max_Score'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $view_c['Check_Duration'];
                        ?>
                    </td>
                    <td>
                        <form action='test/delete' method='post' class='delete'>
                            <input type='hidden' name='Registration_Number' value='<?php
                            echo $view_c['Registration_Number'];
                            ?>' />
							<input type='hidden' name='Manufacturer' value='<?php
                            echo $Manufacturer;
                            ?>' />
							<input type='hidden' name='Model_Name' value='<?php
                            echo $Model_Name;
                            ?>' />
							<input type='hidden' name='Test_Number' value='<?php
                            echo $view_c['Test_Number'];
                            ?>' />
							<input type='hidden' name='Emp_Code' value='<?php
                            echo $view_c[ 'Emp_Code' ];
                            ?>' />
							<input type='hidden' name='Check_ID' value='<?php
                            echo $view_c[ 'Check_ID' ];
                            ?>' />
                            <input type='submit' value='Διαγραφή' title='Διαγραφή' />
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<a href = 'test/listing'>Άμεση επιστροφή στην λίστα αεροσκαφών προς επεξεργασία των ελέγχων που έχουν μέχρι τώρα πραγματοποιηθεί επιτυχώς</a>
<h1>Ειδικότητες του τεχνικού</h1>
<h3><?php echo $First_Name?> <?php echo $Surname?> UMN:<?php echo $UMN?></h3>
<h2><?php echo $dolphins?></h2>
<table>
    <thead>
        <tr>
            <th>Ειδικότητες</th>
            <th>Συνάδελφοι</th>
            <th>Διαγραφή</th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $specialties as $spec_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $spec_c[ 'Manufacturer' ] . " " . $spec_c[ 'Model_Name' ];
                        ?>
                    </td>
                    <td>
                        <form action='technician/update' method='post' class='update'>
                            <input type='hidden' name='Tech_Code' value='<?php
							echo $Tech_Code;
							?>' />
							<input type='hidden' name='Model_Code' value='<?php
							echo $spec_c['Model_Code'];
							?>' />
							<input type='hidden' name='First_Name' value='<?php
							echo $First_Name;
							?>' />
							<input type='hidden' name='Surname' value='<?php
							echo $Surname;
							?>' />
							<input type='hidden' name='UMN' value='<?php
							echo $UMN;
							?>' />
                            <input type='submit' value='Συνάδελφοι' title='Συνάδελφοι' />
                        </form>
                    </td>
					<td>
                        <form action='technician/delete' method='post' class='delete'>
							<input type='hidden' name='Tech_Code' value='<?php
							echo $Tech_Code;
							?>' />
							<input type='hidden' name='Model_Code' value='<?php
							echo $spec_c['Model_Code'];
							?>' />
							<input type='hidden' name='First_Name' value='<?php
							echo $First_Name;
							?>' />
							<input type='hidden' name='Surname' value='<?php
							echo $Surname;
							?>' />
							<input type='hidden' name='UMN' value='<?php
							echo $UMN;
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
<div>
	<form action='technician/create' method='post' class='create'>
		<input type='hidden' name='Tech_Code' value='<?php
		echo $Tech_Code;
		?>' />
		<input type='hidden' name='First_Name' value='<?php
		echo $First_Name;
		?>' />
		<input type='hidden' name='Surname' value='<?php
		echo $Surname;
		?>' />
		<input type='hidden' name='UMN' value='<?php
		echo $UMN;
		?>' />
		<input type='submit' value='Προσθήκη Ειδικότητας' title='Προσθήκη Ειδικότητας' />
	</form>	
</div>
<a href='technician/listing' class='cancel'>Πίσω στους Τεχνικούς</a>
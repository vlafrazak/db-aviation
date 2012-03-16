<h1>Συνάδελφοι του τεχνικού:<?php echo $First_Name . " " . $Surname?></h1>
<table>
    <thead>
        <tr>
            <th>Όνομα</th>
            <th>Επώνυμο</th>
            <th>UMN</th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $coworkers as $cow_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $cow_c[ 'First_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $cow_c[ 'Surname' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $cow_c[ 'UMN' ];
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<div>
	<form action='technician/view' method='post' class='speciality'>
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
		<input type='submit' value='Πίσω στις Ειδικότητες' title='Πίσω στις Ειδικότητες' />
	</form>
</div>
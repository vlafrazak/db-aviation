<h2>Προσθήκη νέας ειδικότητας</h2>
<h3>Τεχνικός: <?php echo $First_Name . " " . $Surname . " " . $UMN; ?></h3>
<form action='technician/create' method='post' enctype="multipart/form-data">
    <div>
        <label>Όνομα Ειδικότητας:</label>
		<select name='new_spec' id='new_spec'>
			<option selected value = "no">Χωρίς ειδίκευση</option>
		<?php foreach ($specialties as $specs){ ?>
			<option value = "<?php echo $specs['Model_Code'] ?>">
				<?php echo $specs['Manufacturer'] . " " . $specs['Model_Name'] ?>
			</option>
		<?php 
			} 
		?>
        </select>
    </div>
	<div>
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
	</div>
    <div>
        <input type='submit' value='Προσθήκη' />
	</div>
</form>
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
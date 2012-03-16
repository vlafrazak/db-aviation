<h2>Νέος Έλεγχος</h2>
<h3>
	<div>Αεροσκάφος <?php echo $Manufacturer . " " . $Model_Name;?></div>
	<div>Αρ.Κυκλοφορίας:<?php echo $Registration_Number;?></div>
</h3>
<h1><?php echo $dolphins; ?></h1>
<form action='test/update' method='post' enctype="multipart/form-data">
    <div>
        <label>Έλεγχος:</label> 
		<select name='Test_Number' id='Test_Number'>
			<option selected value = "no">Επιλέξτε παρακάτω...</option>
		<?php foreach ($faa_tests as $faa_c)
			{ ?>
			<option value = "<?php echo $faa_c['Test_Number'] ?>">
				<?php echo $faa_c['Test_Name'] . " Μέγιστο Σκορ:" . $faa_c['Max_Score']?>
			</option>
			
		<?php 
			} 
		?>
        </select>
    </div>
	<div>
        <label>Τεχνικός:</label> 
		<select name='Tech_Code' id='Tech_Code'>
			<option selected value = "no">Επιλέξτε παρακάτω...</option>
		<?php foreach ($techn_cum as $cum_c)
			{ ?>
			<option value = "<?php echo $cum_c['Emp_Code'] ?>">
				<?php echo $cum_c['First_Name'] . " " . $cum_c['Surname']?>
			</option>
		<?php 
			} 
		?>
        </select>
    </div>
	<div>
        <label>Χρόνος διάρκειας ελέγχου:</label> 
		<input type='text' name='hours' /> : <input type='text' name='mins' />
    </div>
    <div>
        <label>Σκόρ:</label> <input type='score' name='score'  />
	</div>
	<input type='hidden' name='Manufacturer' value='<?php
	echo $Manufacturer;
	?>' />
	<input type='hidden' name='Model_Name' value='<?php
	echo $Model_Name;
	?>' />
	<input type='hidden' name='Model_Code' value='<?php
	echo $Model_Code;
	?>' />
	<input type='hidden' name='Registration_Number' value='<?php
	echo $Registration_Number;
	?>' />
    <div>
        <input type='submit' value='Δημιουργία' />
        <a href='test/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>
<h2>Νέο Αεροπλάνο Στόλου</h2>
<h1><?php echo $dolphins; ?></h1>
<form action='fleet/create' method='post' enctype="multipart/form-data">
    <div>
        <label>Αριθμός Κυκλοφορίας:</label> <input type='text' name='Registration_Number' />
    </div>
    <div>
        <label>Αεροπορική Εταιρεία:</label> <input type='text' name='Air_Carrier'  />
    </div>
    <div>
        <label>Ημ/νια κατασκευής:</label> <input type='text' name='Construction_Date' />
    </div>
    <div>
        <label>Μοντέλο(Κατασκευαστής - Μοντέλο):</label> 
		<select name='Model_Code' id='Model_Code'>
			<option selected value = "no">Επιλέξτε παρακάτω...</option>
		<?php foreach ($models as $mod_c)
			{ ?>
			<option value = "<?php echo $mod_c['Model_Code'] ?>">
				<?php echo $mod_c['Manufacturer'] . " " . $mod_c['Model_Name']?>
			</option>
		<?php 
			} 
		?>
        </select>
    </div>
    <div>
        <input type='submit' value='Δημιουργία' />
        <a href='fleet/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>
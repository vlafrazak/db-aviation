<h2>Επεξεργασία Αεροπλάνου Στόλου</h2>
<h1><?php echo $dolphins; ?></h1>
<form action='fleet/update' method='post' enctype="multipart/form-data">
	<div>
		<input type='hidden' name='Old_Registration_Number' value='<?php
			echo $Registration_Number;?>'/>
	</div>
    <div>
        <label>Αριθμός Κυκλοφορίας:</label> <input type='text' name='Registration_Number' value='<?php
			echo $Registration_Number;?>'/>
    </div>
    <div>
        <label>Αεροπορική Εταιρεία:</label> <input type='text' name='Air_Carrier' value='<?php
			echo $Air_Carrier;?>'/>
    </div>
    <div>
        <label>Ημ/νια κατασκευής:</label> <input type='text' name='Construction_Date'value='<?php
			echo $Construction_Date;?>'/>
    </div>
    <div>
        <label>Μοντέλο(Κατασκευαστής - Μοντέλο):</label> 
		<select name='Model_Code' id='Model_Code'>
			<option value = "no">Επιλέξτε παρακάτω...</option>
		<?php foreach ($models as $mod_c)
			{ ?>
			<option <?php if($mod_c['Model_Code']==$Model_Code) echo "selected";?> 
			value = "<?php echo $mod_c['Model_Code'] ?>">
				<?php echo $mod_c['Manufacturer'] . " " . $mod_c['Model_Name']?>
			</option>
		<?php 
			} 
		?>
        </select>
    </div>
    <div>
        <input type='submit' value='Ενημέρωση' />
        <a href='fleet/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>
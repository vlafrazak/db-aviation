<h2>Μοντέλο Αεροσκάφους</h2>
<form action='airplane/update' method='post' enctype="multipart/form-data">
	<div>
		<h1><?php echo $Delfini; ?></h1>
	</div>
    <div>
        <label>Όνομα μοντέλου:</label> <input type='text' name='Model_Name' value='<?php
		echo  $Model_Name;
		?>'/>
    </div>
    <div>
        <label>Χωρητικότητα(άτομα):</label> <input type='text' name='Capacity' value='<?php
		echo  $Capacity;
		?>' />
    </div>
    <div>
        <label>Βάρος(τόνοι) {Μορφή=xxx}:</label> <input type='text' name='Weight' value='<?php
		echo  $Weight;
		?>' />
    </div>
    <div>
        <label>Κατασκευαστής:</label> <input type='text' name='Manufacturer' value='<?php
		echo  $Manufacturer;
		?>' />
    </div>
	<div>
        <input type='hidden' name='Model_Code' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Model_Code;
		?>' />
    </div>
    <div>
        <input type='submit' value='Ενημέρωση' />
        <a href='airplane/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>
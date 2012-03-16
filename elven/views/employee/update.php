<h2>Εργαζόμενος</h2>
<form action='employee/update' method='post' enctype="multipart/form-data">
	<div>
		<h1><?php echo $Delfini; ?></h1>
	</div>
    <div>
        <label>Όνομα:</label> <input type='text' name='First_Name' value='<?php
		//foreach ( $record as $rec )
		echo  $First_Name;
		?>'/>
    </div>
    <div>
        <label>Επώνυμο:</label> <input type='text' name='Surname' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Surname;
		?>' />
    </div>
    <div>
        <label>UMN:</label> <input type='text' name='UMN' value='<?php
		//foreach ( $record as $rec ) {
		echo  $UMN;
		?>' />
    </div>
    <div>
        <label>ΑΦΜ:</label> <input type='text' name='SSN' value='<?php
		//foreach ( $record as $rec ) {
		echo  $SSN;
		?>' />
    </div>
    <div>
        <label>Όνομα οδού:</label> <input type='text' name='Street_Name' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Street_Name;
		?>' />
    </div>
    <div>
        <label>Αριθμός οδού:</label> <input type='text' name='Street_Number' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Street_Number;
		?>' />
    </div>
    <div>
        <label>Ταχ. Κώδικας:</label> <input type='text' name='Postal_Code' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Postal_Code;
		?>' />
    </div>
    <div>
        <label>Μισθός:</label> <input type='text' name='Salary' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Salary;
		?>' />
    </div>
    <div>
        <label>Επάγγελμα:</label> 
		<select name='job' id='job'>
			<option value = "no">Χωρίς ειδίκευση</option>
			<option <?php if ($job=="tech"){echo "selected";} ?> value = "tech">Τεχνικός</option>
			<option <?php if ($job=="controller"){echo "selected";} ?> value = "controller">Ελεγκτής</option>
        </select>
    </div>
	<div>
        <label>Ημ/μνια εξέτασης(YYYY-MM-DD):</label> <input type='date' name='Date_exam' value='<?php
		//foreach ( $record as $rec ) {
		if ($job=="controller")
			echo  $Date_exam;
		?>' />
    </div>
	<div>
        <input type='hidden' name='Emp_Code' value='<?php
		//foreach ( $record as $rec ) {
		echo  $Emp_Code;
		?>' />
    </div>
    <div>
        <input type='submit' value='Ενημέρωση' />
        <a href='employee/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>
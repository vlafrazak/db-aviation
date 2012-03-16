<h2>FAA - Έλεγχος</h2>
<form action='check/update' method='post' enctype="multipart/form-data">
	<div>
		<h1><?php echo $Delfini; ?></h1>
	</div>
    <div>
        <label>Όνομα Ελέγχου:</label> <input type='text' name='Test_Name' value='<?php
		echo  $Test_Name;
		?>'/>
    </div>
    <div>
        <label>Μέγιστο σκορ(xxx):</label> <input type='text' name='Max_Score' value='<?php
		echo  $Max_Score;
		?>' />
    </div>
	<div>
        <input type='hidden' name='Test_Number' value='<?php
		echo  $Test_Number;
		?>' />
    </div>
    <div>
        <input type='submit' value='Ενημέρωση' />
        <a href='check/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>
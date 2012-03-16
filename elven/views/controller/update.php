<h2>Αλλαγή Ημ/νίας Εξέτασης!</h2>
<h3>Ελεγκτής: <?php echo $First_Name . " " . $Surname . " UMN:" . $UMN; ?></h3>
<h1><?php echo $dolphins; ?></h1>
<form action='controller/create' method='post' enctype="multipart/form-data">
    <div>
        <label>Ημερομηνία Εξέτασης(YYYY-MM-DD):</label> 
		<input type='date' name='New_Exam_Date' value='<?php
		echo $Last_Exam_Date;
		?>'/>
		
    </div>
	<div>
		<input type='hidden' name='Contr_Code' value='<?php
		echo $Contr_Code;
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
		<input type='hidden' name='Last_Exam_Date' value='<?php
		echo $Last_Exam_Date;
		?>' />
	</div>
    <div>
        <input type='submit' value='Αλλαγή' />
	</div>
</form>
<a href='controller/listing'>Πίσω στους ελεγκτές!</a>
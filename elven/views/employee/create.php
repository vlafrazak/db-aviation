<h2>Νέος εργαζόμενος</h2>
<form action='employee/create' method='post' enctype="multipart/form-data">
    <div>
        <label>Όνομα:</label> <input type='text' name='First_Name' />
    </div>
    <div>
        <label>Επώνυμο:</label> <input type='text' name='Surname'  />
    </div>
    <div>
        <label>UMN:</label> <input type='text' name='UMN' />
    </div>
    <div>
        <label>ΑΦΜ:</label> <input type='text' name='SSN' />
    </div>
    <div>
        <label>Όνομα οδού:</label> <input type='text' name='Street_Name' />
    </div>
    <div>
        <label>Αριθμός οδού:</label> <input type='text' name='Street_Number' />
    </div>
    <div>
        <label>Ταχ. Κώδικας:</label> <input type='text' name='Postal_Code' />
    </div>
    <div>
        <label>Μισθός:</label> <input type='text' name='Salary' />
    </div>
    <div>
        <label>Επάγγελμα:</label> 
		<select name='job' id='job'>
			<option selected value = "no">Χωρίς ειδίκευση</option>
			<option value = "tech">Τεχνικός</option>
			<option value = "controller">Ελεγκτής</option>
        </select>
    </div>
	<div>
        <label>Ημ/μνια εξέτασης(YYYY-MM-DD){ΜΟΝΟ ΓΙΑ ΕΛΕΓΚΤΕΣ}:</label> <input type='date' name='Date_exam' />
    </div>
    <div>
        <input type='submit' value='Δημιουργία' />
        <a href='employee/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>


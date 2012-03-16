<h2>Νέο Αεροσκάφος!</h2>
<form action='airplane/create' method='post' enctype="multipart/form-data">
    <div>
        <label>Όνομα μοντέλου:</label> <input type='text' name='Model_Name' />
    </div>
    <div>
        <label>Χωρητικότητα(άτομα):</label> <input type='text' name='Capacity'  />
    </div>
    <div>
        <label>Βάρος(τόνοι) {Μορφή=xxx}:</label> <input type='text' name='Weight' />
    </div>
    <div>
        <label>Κατασκευαστής:</label> <input type='text' name='Manufacturer' />
    </div>
    <div>
        <input type='submit' value='Δημιουργία' />
        <a href='airplane/listing' class='cancel'>Ακύρωση</a>
	</div>
</form>

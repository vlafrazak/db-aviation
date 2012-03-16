<h1>Στατιστικα</h1>
<div>
	Αριθμός Εργαζομένων: 	<?php 
							echo $emps['COUNT(*)'];
							?>
</div>
<div>
	Αεροσκάφη κατα εταιρία
	<table>
		<thead>
			<tr>
				<th>Εταιρία</th>
				<th>Αριθμος Αεροσκαφών</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ( $planes as $planes_c ) {
					?>
					<tr>
						<td>
							<?php
							echo $planes_c[ 'Manufacturer' ] , " " , $planes_c[ 'Model_Name' ]; ///////////////////////////////////////////////////////////////////////////////////////////////
							?>
						</td>
						<td>
							<?php
							echo $planes_c[ 'COUNT(*)' ];			///////////////////////////////////////////////////////////////////////////////////////////////
							?>
						</td>                  
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>	
</div>
<div>
	Υπολογισμος Εργαζομένων με Ειδικότητες
</div>
<div>
	<form action='stats/update' method='post' enctype="multipart/form-data">
		<div>
			<label>Αριθμος Ειδικοτήτων:</label> <input type='text' name='Base' />
		</div>
		<div>
			<input type='submit' value='Αναζήτηση' />
		</div>
	</form>
</div>
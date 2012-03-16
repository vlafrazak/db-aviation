<h1>Ελεγκτές</h1>
<table>
    <thead>
        <tr>
            <th>Όνομα</th>
            <th>Επώνυμο</th>
            <th>UMN</th></th>
            <th>Ημ/νια τελ. εξέτασης</th>
			<th>Αλλαγή Ημ/νιας</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $controllers as $contr_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $contr_c[ 'First_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $contr_c[ 'Surname' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $contr_c[ 'UMN' ];
                        ?>
                    </td>        
					<td>
                        <?php
                        echo $contr_c[ 'Last_Exam_Date' ];
                        ?>
                    </td>        
                    <td>
                        <form action='controller/update' method='post' class='update'>
                            <input type='hidden' name='Contr_Code' value='<?php
                            echo $contr_c['Emp_Code'];
                            ?>' />
							<input type='hidden' name='First_Name' value='<?php
                            echo $contr_c['First_Name'];
                            ?>' />
							<input type='hidden' name='Surname' value='<?php
                            echo $contr_c['Surname'];
                            ?>' />
							<input type='hidden' name='UMN' value='<?php
                            echo $contr_c['UMN'];
                            ?>' />
							<input type='hidden' name='Last_Exam_Date' value='<?php
                            echo $contr_c['Last_Exam_Date'];
                            ?>' />
                            <input type='submit' value='Αλλαγή' title='Αλλαγή' />
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>

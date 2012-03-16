<h1>Τεχνικοί</h1>
<table>
    <thead>
        <tr>
            <th>Όνομα</th>
            <th>Επώνυμο</th>
            <th>UMN</th></th>
            <th>Ειδικότητες</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $technicians as $tech_c ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $tech_c[ 'First_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $tech_c[ 'Surname' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $tech_c[ 'UMN' ];
                        ?>
                    </td>         
                    <td>
                        <form action='technician/view' method='post' class='speciality'>
                            <input type='hidden' name='Tech_Code' value='<?php
                            echo $tech_c['Emp_Code'];
                            ?>' />
							<input type='hidden' name='First_Name' value='<?php
                            echo $tech_c['First_Name'];
                            ?>' />
							<input type='hidden' name='Surname' value='<?php
                            echo $tech_c['Surname'];
                            ?>' />
							<input type='hidden' name='UMN' value='<?php
                            echo $tech_c['UMN'];
                            ?>' />
                            <input type='submit' value='Ειδικότητες' title='Ειδικότητες' />
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>

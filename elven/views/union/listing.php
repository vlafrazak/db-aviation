<h1>Σωματείο Εργαζομένων</h1>
<table>
    <thead>
        <tr>
            <th>Όνομα</th>
            <th>Επώνυμο</th>
            <th>UMN</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ( $employees as $emp ) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $emp[ 'First_Name' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'Surname' ];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $emp[ 'UMN' ];
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>

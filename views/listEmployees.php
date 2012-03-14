<?php
    include "../header.php";
?>
<table border = "1" >
<tr>
<th></th>
</tr>
<?php
    $employees = include "../models/listEmployee.php";

    foreach( $employees as $employee ) {
    ?>
        <tr>
    <?php
        foreach( $employee as $field ) {
        ?>
        <td>
        <?php
        echo $field;
            ?>
        </td>
            <?php
        }
                ?>
        </tr>
        <?php
    }

?>
</table>
<?php
    include "../footer.php";
?>

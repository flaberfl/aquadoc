

<?= CFS()->get('link'); ?>


<?php

$loop = CFS()->get('loop');

foreach ($loop as $row) {

?>


Тело цикла


<?= $row['loop']; ?>



<?php
}
?>
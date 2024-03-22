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



Цикл в цикле

<?php

$loop2 = $row['loop2'];

foreach ($loop2 as $row2) {

?>


  <?= $row2['loop2']; ?>

<?php
}
?>


Переводы

<?php pll_e('call_me'); ?>


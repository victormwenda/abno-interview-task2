<?php

use app\database\DbWorker;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php print_r((new DbWorker())->getClassesArray()); ?>
</div>

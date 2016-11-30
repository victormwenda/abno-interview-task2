<?php

use app\database\DbWorker;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php echo (new DbWorker())->getCurrentTimestamp(); ?>
</div>

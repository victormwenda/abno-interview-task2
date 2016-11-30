<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassPrefects */

$this->title = 'Update Class Prefects: ' . $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Prefects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_id, 'url' => ['view', 'id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="class-prefects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

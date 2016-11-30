<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassPrefects */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Prefects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-prefects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'student_id',
            'role_start_date',
            'role_end_date',
            //'trashed',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\database\DbWorker;

/* @var $this yii\web\View */
/* @var $model app\models\ClassPrefects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-prefects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->dropDownList((new DbWorker())->getStudentsArray()) ?>

    <?= $form->field($model, 'role_start_date')->textInput() ?>

    <?= $form->field($model, 'role_end_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

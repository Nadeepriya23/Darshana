<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfessionalDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="professional-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'service') ?>

    <?= $form->field($model, 'class_and_grade') ?>

    <?= $form->field($model, 'register_no') ?>

    <?= $form->field($model, 'salary_increment_date') ?>

    <?php // echo $form->field($model, 'wop_no') ?>

    <?php // echo $form->field($model, 'post') ?>

    <?php // echo $form->field($model, 'teachers_teacherId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

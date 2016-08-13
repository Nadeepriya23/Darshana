<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacherId') ?>

    <?= $form->field($model, 'TeacherIndex') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Address') ?>

    <?= $form->field($model, 'NIC') ?>

    <?php // echo $form->field($model, 'Tel') ?>

    <?php // echo $form->field($model, 'DateOfBirth') ?>

    <?php // echo $form->field($model, 'DateOfFirstAppointment') ?>

    <?php // echo $form->field($model, 'DateofThisAppointment') ?>

    <?php // echo $form->field($model, 'ComputerNo') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

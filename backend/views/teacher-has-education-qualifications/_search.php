<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasEducationQualificationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-has-education-qualifications-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TeacherId') ?>

    <?= $form->field($model, 'QualificationId') ?>

    <?= $form->field($model, 'Year') ?>

    <?= $form->field($model, 'Institute') ?>

    <?= $form->field($model, 'ValidDate') ?>

    <?php // echo $form->field($model, 'Subject_1') ?>

    <?php // echo $form->field($model, 'Subject_2') ?>

    <?php // echo $form->field($model, 'Subject_3') ?>

    <?php // echo $form->field($model, 'Subject_4') ?>

    <?php // echo $form->field($model, 'Id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

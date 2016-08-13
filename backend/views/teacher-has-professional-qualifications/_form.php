<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasProfessionalQualifications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-has-professional-qualifications-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TeacherId')->textInput() ?>

    <?= $form->field($model, 'QualificationId')->textInput() ?>

    <?= $form->field($model, 'Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Institute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ValidDate')->textInput() ?>

    <?= $form->field($model, 'Subject_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subject_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subject_3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

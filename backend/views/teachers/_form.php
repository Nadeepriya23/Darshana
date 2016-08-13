<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'TeacherIndex')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateOfBirth')->textInput() ?>

    <?= $form->field($model, 'DateOfFirstAppointment')->textInput() ?>

    <?= $form->field($model, 'DateofThisAppointment')->textInput() ?>

    <?= $form->field($model, 'ComputerNo')->textInput() ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'file')->fileInput() ?>
    
    <!-- create professional data for this teacher    
    
    <!-- $form->field($professionaldata, 'service')->dropDownList([ 'S.L.E.A.S' => 'S.L.E.A.S', 'S.L.P.S' => 'S.L.P.S', 'S.L.T.S' => 'S.L.T.S', ], ['prompt' => '']) ?>

    <!-- $form->field($professionaldata, 'class_and_grade')->dropDownList([ 'Class 3 – Grade II' => 'Class 3 – Grade II', 'Class 3 - Grade I' => 'Class 3 - Grade I', 'Class 2 – Grade II' => 'Class 2 – Grade II', 'Class 2 – Grade I' => 'Class 2 – Grade I', 'Class 1' => 'Class 1', ], ['prompt' => '']) ?>

    <!--$form->field($professionaldata, 'register_no')->textInput(['maxlength' => true]) ?>

    <!--$form->field($professionaldata, 'salary_increment_date')->textInput(['maxlength' => true]) ?>

    <!--$form->field($professionaldata, 'wop_no')->textInput(['maxlength' => true]) ?>

    <!--$form->field($professionaldata, 'post')->textInput(['maxlength' => true]) ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

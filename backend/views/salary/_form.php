<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Salary */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salary-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ComputerNo')->textInput() ?>

    <?= $form->field($model, 'Bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AccountNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaysheetIndex')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

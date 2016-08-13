<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SalarySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salary-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ComputerNo') ?>

    <?= $form->field($model, 'Bank') ?>

    <?= $form->field($model, 'Branch') ?>

    <?= $form->field($model, 'AccountNo') ?>

    <?= $form->field($model, 'PaysheetIndex') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Teachers;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\ProfessionalData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="professional-data-form">

    <?php $form = ActiveForm::begin(); ?>
    


    <?= $form->field($model, 'teachers_teacherId')->widget(Select2::classname(),[
            'data' => ArrayHelper::map(Teachers::find()->asArray()->all(), 'teacherId', 'Name'),
            'language' => 'en',
            'options' => ['placeholder' => 'select Teacher','teacherId' => 'Name'],
            'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    <?= $form->field($model, 'service')->dropDownList([ 'S.L.E.A.S.' => 'S.L.E.A.S.', 'S.L.P.S.' => 'S.L.P.S.', 'S.L.T.S.' => 'S.L.T.S.', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'class_and_grade')->dropDownList([ 'Class 3 – Grade II' => 'Class 3 – Grade II', 'Class 3 - Grade I' => 'Class 3 - Grade I', 'Class 2 – Grade II' => 'Class 2 – Grade II', 'Class 2 – Grade I' => 'Class 2 – Grade I', 'Class 1' => 'Class 1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'register_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_increment_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wop_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

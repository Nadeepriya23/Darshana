<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Teachers;
use backend\models\EducationQualifications;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasEducationQualifications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-has-education-qualifications-form">

    <?php $form = ActiveForm::begin(); ?>

  

    <?= $form->field($model, 'TeacherId')->widget(Select2::classname(),[
            'data' => ArrayHelper::map(Teachers::find()->asArray()->all(), 'teacherId', 'Name'),
            'language' => 'en',
            'options' => ['placeholder' => 'select Teacher','teacherId' => 'Name'],
            'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>
    
    <?= $form->field($model, 'QualificationId')->dropDownList(
        ArrayHelper::map(EducationQualifications::find()->all(),'QualificationId','Qualification'),
        ['prompt'=>'Select Qualification']
                                                        
    ) ?>
    

    <?= $form->field($model, 'Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Institute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ValidDate')->textInput() ?>

    <?= $form->field($model, 'Subject_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subject_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subject_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subject_4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

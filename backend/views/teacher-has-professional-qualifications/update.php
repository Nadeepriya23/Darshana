<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasProfessionalQualifications */

$this->title = 'Update Teacher Has Professional Qualifications: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Professional Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-has-professional-qualifications-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

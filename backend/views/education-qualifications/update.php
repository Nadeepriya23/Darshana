<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EducationQualifications */

$this->title = 'Update Education Qualifications: ' . $model->QualificationId;
$this->params['breadcrumbs'][] = ['label' => 'Education Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->QualificationId, 'url' => ['view', 'id' => $model->QualificationId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="education-qualifications-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

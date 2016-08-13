<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasProfessionalQualifications */

$this->title = 'Create Teacher Has Professional Qualifications';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Professional Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-professional-qualifications-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

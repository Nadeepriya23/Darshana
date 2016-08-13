<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasEducationQualifications */

$this->title = 'Create Teacher Has Education Qualifications';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Education Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-education-qualifications-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

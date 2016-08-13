<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherHasProfessionalQualifications */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Professional Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-professional-qualifications-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TeacherId',
            'QualificationId',
            'Year',
            'Institute',
            'ValidDate',
            'Subject_1',
            'Subject_2',
            'Subject_3',
            'Id',
        ],
    ]) ?>

</div>

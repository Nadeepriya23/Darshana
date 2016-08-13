<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeacherHasProfessionalQualificationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Has Professional Qualifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-professional-qualifications-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher Has Professional Qualifications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TeacherId',
            'QualificationId',
            'Year',
            'Institute',
            'ValidDate',
            // 'Subject_1',
            // 'Subject_2',
            // 'Subject_3',
            // 'Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

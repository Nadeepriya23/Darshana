<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeacherHasEducationQualificationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Has Education Qualifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-education-qualifications-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher Has Education Qualifications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacher.Name',
            //'TeacherId',
            'qualification.Qualification',
            'QualificationId',
            'Year',
            'Institute',
            'ValidDate',
            // 'Subject_1',
            // 'Subject_2',
            // 'Subject_3',
            // 'Subject_4',
            // 'Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

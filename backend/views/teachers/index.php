<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeachersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teachers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacherId',
            'TeacherIndex',
            'Name',
            'Address',
            'NIC',
            // 'Tel',
            // 'DateOfBirth',
            // 'DateOfFirstAppointment',
            // 'DateofThisAppointment',
            // 'ComputerNo',
            // 'Status',
            // 'Image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

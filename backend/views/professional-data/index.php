<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProfessionalDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Professional Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professional-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Professional Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'service',
            'class_and_grade',
            //'register_no',
            'salary_increment_date',
            // 'wop_no',
            'post',
            'teachers_teacherId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

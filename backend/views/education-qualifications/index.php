<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchEducationQualifications */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Education Qualifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-qualifications-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Education Qualifications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'QualificationId',
            'Qualification',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

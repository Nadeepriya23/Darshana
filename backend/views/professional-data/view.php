<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfessionalData */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Professional Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professional-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'service',
            'class_and_grade',
            'register_no',
            'salary_increment_date',
            'wop_no',
            'post',
            'teachers_teacherId',
        ],
    ]) ?>

</div>

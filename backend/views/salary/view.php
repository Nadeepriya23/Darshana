<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Teachers;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Salary */

$this->title = $model->ComputerNo;
$this->params['breadcrumbs'][] = ['label' => 'Salaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$user = Teachers::find()->where(['ComputerNo' => $model->ComputerNo])->one();

?>


<div class="salary-view">

    <h1><?= Html::encode($user->Name) ?></h1>
    


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ComputerNo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ComputerNo], [
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
            'ComputerNo',
            'Bank',
            'Branch',
            'AccountNo',
            'PaysheetIndex',
        ],
    ]) ?>

</div>

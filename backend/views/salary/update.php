<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Salary */

$this->title = 'Update Salary: ' . $model->ComputerNo;
$this->params['breadcrumbs'][] = ['label' => 'Salaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ComputerNo, 'url' => ['view', 'id' => $model->ComputerNo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

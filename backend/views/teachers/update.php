<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Teachers */

$this->title = 'Update Teachers: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'teacherId' => $model->teacherId, 'ComputerNo' => $model->ComputerNo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

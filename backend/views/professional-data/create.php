<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProfessionalData */

$this->title = 'Create Professional Data';
$this->params['breadcrumbs'][] = ['label' => 'Professional Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professional-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

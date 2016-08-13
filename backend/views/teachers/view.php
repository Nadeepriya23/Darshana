<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $model backend\models\Teachers */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-view">
    
    <h1><?= Html::encode($this->title) ?></h1>
    
    
    <?= Html::img('@web/uploads/'.$model->NIC.'.'.'jpg',['alt'=>'some', 'class'=>'thing', 'height'=>'125px', 'width'=>'100px'], ['site/zoom']);?>
    
    <p>
        
        <?= Html::a('Update', ['update', 'teacherId' => $model->teacherId, 'ComputerNo' => $model->ComputerNo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'teacherId' => $model->teacherId, 'ComputerNo' => $model->ComputerNo], [
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
            
            'TeacherIndex',
            'Name',
            'Address',
            'NIC',
            'Tel',
            'DateOfBirth',
            'DateOfFirstAppointment',
            'DateofThisAppointment',
            'ComputerNo',
            'Status',
        ],
    ]) ?>

</div>

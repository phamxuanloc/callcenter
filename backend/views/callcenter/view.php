<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CallHistory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Call Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-history-view">

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
            'start_time',
            'answer_time',
            'end_time',
            'customer_id',
            'msisdn',
            'acc_id',
            'acc_phone',
            'status_call',
            'disposition',
            'duration',
            'billsec',
            'uniqueid',
            'call_type',
            'rate',
            'trunk_id',
            'file_record',
            'transfer_id',
            'queue_id',
        ],
    ]) ?>

</div>

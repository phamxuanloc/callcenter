<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchCallHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'start_time') ?>

    <?= $form->field($model, 'answer_time') ?>

    <?= $form->field($model, 'end_time') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'msisdn') ?>

    <?php // echo $form->field($model, 'acc_id') ?>

    <?php // echo $form->field($model, 'acc_phone') ?>

    <?php // echo $form->field($model, 'status_call') ?>

    <?php // echo $form->field($model, 'disposition') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'billsec') ?>

    <?php // echo $form->field($model, 'uniqueid') ?>

    <?php // echo $form->field($model, 'call_type') ?>

    <?php // echo $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'trunk_id') ?>

    <?php // echo $form->field($model, 'file_record') ?>

    <?php // echo $form->field($model, 'transfer_id') ?>

    <?php // echo $form->field($model, 'queue_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

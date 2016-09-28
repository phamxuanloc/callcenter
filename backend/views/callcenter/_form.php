<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CallHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'answer_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msisdn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acc_id')->textInput() ?>

    <?= $form->field($model, 'acc_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_call')->textInput() ?>

    <?= $form->field($model, 'disposition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'billsec')->textInput() ?>

    <?= $form->field($model, 'uniqueid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'call_type')->textInput() ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?= $form->field($model, 'trunk_id')->textInput() ?>

    <?= $form->field($model, 'file_record')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transfer_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

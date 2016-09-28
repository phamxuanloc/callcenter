<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CallHistory */

$this->title = 'Create Call History';
$this->params['breadcrumbs'][] = ['label' => 'Call Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

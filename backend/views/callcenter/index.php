<?php
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchCallHistory */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Call Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-history-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Call History', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			//            ['class' => 'kartik\grid\SerialColumn'],
			'start_time',
			'msisdn',
			'acc_phone',
			'billsec',
			//            'answer_time',
			//            'end_time',
			//            'customer_id',
			// 'acc_id',
			'status_call',
			'call_type',
			// 'disposition',
			// 'duration',
			// 'uniqueid',
			// 'rate',
			// 'trunk_id',
			'file_record',
			// 'transfer_id',
			// 'queue_id',
			//            ['class'=>'kartik\grid\ActionColumn',],
		],
	]); ?>
</div>

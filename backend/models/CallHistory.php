<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "call_history".
 *
 * @property string $id
 * @property string $start_time
 * @property string $answer_time
 * @property string $end_time
 * @property string $customer_id
 * @property string $msisdn
 * @property integer $acc_id
 * @property string $acc_phone
 * @property integer $status_call
 * @property string $disposition
 * @property integer $duration
 * @property integer $billsec
 * @property string $uniqueid
 * @property integer $call_type
 * @property integer $rate
 * @property integer $trunk_id
 * @property string $file_record
 * @property string $transfer_id
 * @property integer $queue_id
 */
class CallHistory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'call_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_time', 'answer_time', 'end_time'], 'safe'],
            [['customer_id', 'acc_id', 'status_call', 'duration', 'billsec', 'call_type', 'rate', 'trunk_id', 'transfer_id', 'queue_id'], 'integer'],
            [['msisdn', 'acc_phone'], 'string', 'max' => 20],
            [['disposition', 'uniqueid'], 'string', 'max' => 50],
            [['file_record'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_time' => 'Thời gian gọi',
            'answer_time' => 'Answer Time',
            'end_time' => 'End Time',
            'customer_id' => 'Customer ID',
            'msisdn' => 'Số chủ gọi',
            'acc_id' => 'Acc ID',
            'acc_phone' => 'Số bị gọi',
            'status_call' => 'Trạng thái',
            'disposition' => 'Disposition',
            'duration' => 'Duration',
            'billsec' => 'Thời gian đàm thoại',
            'uniqueid' => 'Uniqueid',
            'call_type' => 'Hướng cuộc gọi',
            'rate' => 'Rate',
            'trunk_id' => 'Trunk ID',
            'file_record' => 'File ghi âm',
            'transfer_id' => 'Transfer ID',
            'queue_id' => 'Queue ID',
        ];
    }
    public function actionDownload($id) {
        $audio = $this->findOne($id);
        $file =  Yii::getAlias('webroot') . $audio->file_record;
        if (file_exists($file)) {
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $audio->file_record);
            header('Content-Length: ' . filesize($audio->file_record));
            readfile($file);
            Yii::$app->end();
        }else{
            echo "file not exist: ".$file;
        }
        exit;
    }
}

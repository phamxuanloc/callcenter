<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CallHistory;

/**
 * SearchCallHistory represents the model behind the search form about `backend\models\CallHistory`.
 */
class SearchCallHistory extends CallHistory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'acc_id', 'status_call', 'duration', 'billsec', 'call_type', 'rate', 'trunk_id', 'transfer_id', 'queue_id'], 'integer'],
            [['start_time', 'answer_time', 'end_time', 'msisdn', 'acc_phone', 'disposition', 'uniqueid', 'file_record'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CallHistory::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'start_time' => $this->start_time,
            'answer_time' => $this->answer_time,
            'end_time' => $this->end_time,
            'customer_id' => $this->customer_id,
            'acc_id' => $this->acc_id,
            'status_call' => $this->status_call,
            'duration' => $this->duration,
            'billsec' => $this->billsec,
            'call_type' => $this->call_type,
            'rate' => $this->rate,
            'trunk_id' => $this->trunk_id,
            'transfer_id' => $this->transfer_id,
            'queue_id' => $this->queue_id,
        ]);

        $query->andFilterWhere(['like', 'msisdn', $this->msisdn])
            ->andFilterWhere(['like', 'acc_phone', $this->acc_phone])
            ->andFilterWhere(['like', 'disposition', $this->disposition])
            ->andFilterWhere(['like', 'uniqueid', $this->uniqueid])
            ->andFilterWhere(['like', 'file_record', $this->file_record]);

        return $dataProvider;
    }
}

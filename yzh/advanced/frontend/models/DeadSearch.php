<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dead;

/**
 * DeadSearch represents the model behind the search form of `frontend\models\Dead`.
 */
class DeadSearch extends Dead
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['d_time'], 'safe'],
            [['de_num', 'dw_num'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Dead::find();

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
            'd_time' => $this->d_time,
            'de_num' => $this->de_num,
            'dw_num' => $this->dw_num,
        ]);

        return $dataProvider;
    }
}

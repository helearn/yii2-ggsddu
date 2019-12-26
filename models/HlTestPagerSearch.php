<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\HlTestPager;

/**
 * HlTestPagerSearch represents the model behind the search form of `helearn\ggsddu\models\HlTestPager`.
 */
class HlTestPagerSearch extends HlTestPager
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'title', 'explanation', 'status', 'created_at', 'updated_at', 'start_at', 'end_at', 'oid', 'uid'], 'integer'],
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
        $query = HlTestPager::find();

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
            'name' => $this->name,
            'title' => $this->title,
            'explanation' => $this->explanation,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'oid' => $this->oid,
            'uid' => $this->uid,
        ]);

        return $dataProvider;
    }
}

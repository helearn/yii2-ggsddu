<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\TestPagerSetting;

/**
 * TestPagerSettingSearch represents the model behind the search form of `helearn\ggsddu\models\TestPagerSetting`.
 */
class TestPagerSettingSearch extends TestPagerSetting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'sort', 'default_score'], 'integer'],
            [['type', 'title'], 'safe'],
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
        $query = TestPagerSetting::find();

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
            'pid' => $this->pid,
            'sort' => $this->sort,
            'default_score' => $this->default_score,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}

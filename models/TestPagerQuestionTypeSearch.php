<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\TestPagerQuestionType;

/**
 * TestPagerQuestionTypeSearch represents the model behind the search form of `helearn\ggsddu\models\TestPagerQuestionType`.
 */
class TestPagerQuestionTypeSearch extends TestPagerQuestionType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'type', 'title', 'sort', 'default_score'], 'integer'],
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
        $query = TestPagerQuestionType::find();

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
            'type' => $this->type,
            'title' => $this->title,
            'sort' => $this->sort,
            'default_score' => $this->default_score,
        ]);

        return $dataProvider;
    }
}

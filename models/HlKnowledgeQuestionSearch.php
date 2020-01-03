<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\HlKnowledgeQuestion;

/**
 * HlKnowledgeQuestionSearch represents the model behind the search form of `helearn\ggsddu\models\HlKnowledgeQuestion`.
 */
class HlKnowledgeQuestionSearch extends HlKnowledgeQuestion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_type'], 'safe'],
            [['question_id', 'knowledge_id'], 'integer'],
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
        $query = HlKnowledgeQuestion::find();

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
            'question_id' => $this->question_id,
            'knowledge_id' => $this->knowledge_id,
        ]);

        $query->andFilterWhere(['like', 'question_type', $this->question_type]);

        return $dataProvider;
    }
}

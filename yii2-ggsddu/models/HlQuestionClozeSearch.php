<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\HlQuestionCloze;

/**
 * HlQuestionClozeSearch represents the model behind the search form of `helearn\ggsddu\models\HlQuestionCloze`.
 */
class HlQuestionClozeSearch extends HlQuestionCloze
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'question_stem', 'correct_answer', 'answer_process', 'knowledge_ids', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'integer'],
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
        $query = HlQuestionCloze::find();

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
            'question_stem' => $this->question_stem,
            'correct_answer' => $this->correct_answer,
            'answer_process' => $this->answer_process,
            'knowledge_ids' => $this->knowledge_ids,
            'status' => $this->status,
            'created_id' => $this->created_id,
            'updated_id' => $this->updated_id,
            'oid' => $this->oid,
            'uid' => $this->uid,
        ]);

        return $dataProvider;
    }
}

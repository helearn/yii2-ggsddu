<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\QuestionCompletion;

/**
 * QuestionCompletionSearch represents the model behind the search form of `helearn\ggsddu\models\QuestionCompletion`.
 */
class QuestionCompletionSearch extends QuestionCompletion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'integer'],
            [['name', 'question_stem', 'correct_answer', 'answer_process'], 'safe'],
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
        $query = QuestionCompletion::find();

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
            'status' => $this->status,
            'created_id' => $this->created_id,
            'updated_id' => $this->updated_id,
            'oid' => $this->oid,
            'uid' => $this->uid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'question_stem', $this->question_stem])
            ->andFilterWhere(['like', 'correct_answer', $this->correct_answer])
            ->andFilterWhere(['like', 'answer_process', $this->answer_process]);

        return $dataProvider;
    }
}

<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\QuestionCloze;

/**
 * QuestionClozeSearch represents the model behind the search form of `helearn\ggsddu\models\QuestionCloze`.
 */
class QuestionClozeSearch extends QuestionCloze
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_id', 'updated_id', 'oqid', 'user_id'], 'integer'],
            [['name', 'question_stem', 'correct_answer', 'answer_process', 'oqtype'], 'safe'],
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
        $query = QuestionCloze::find();

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
            'oqid' => $this->oqid,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'question_stem', $this->question_stem])
            ->andFilterWhere(['like', 'correct_answer', $this->correct_answer])
            ->andFilterWhere(['like', 'answer_process', $this->answer_process])
            ->andFilterWhere(['like', 'oqtype', $this->oqtype]);

        return $dataProvider;
    }
}

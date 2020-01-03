<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\HlQuestionChoice;

/**
 * HlQuestionChoiceSearch represents the model behind the search form of `helearn\ggsddu\models\HlQuestionChoice`.
 */
class HlQuestionChoiceSearch extends HlQuestionChoice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_multiple', 'status', 'oqid', 'user_id'], 'integer'],
            [['name', 'question_stem', 'option1', 'option2', 'option3', 'option4', 'options', 'correct_options', 'answer_process', 'created_at', 'updated_at', 'oqtype'], 'safe'],
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
        $query = HlQuestionChoice::find();

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
            'is_multiple' => $this->is_multiple,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'oqid' => $this->oqid,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'question_stem', $this->question_stem])
            ->andFilterWhere(['like', 'option1', $this->option1])
            ->andFilterWhere(['like', 'option2', $this->option2])
            ->andFilterWhere(['like', 'option3', $this->option3])
            ->andFilterWhere(['like', 'option4', $this->option4])
            ->andFilterWhere(['like', 'options', $this->options])
            ->andFilterWhere(['like', 'correct_options', $this->correct_options])
            ->andFilterWhere(['like', 'answer_process', $this->answer_process])
            ->andFilterWhere(['like', 'oqtype', $this->oqtype]);

        return $dataProvider;
    }
}

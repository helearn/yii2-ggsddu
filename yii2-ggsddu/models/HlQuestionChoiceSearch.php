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
            [['id', 'name', 'question_stem', 'option1', 'option2', 'option3', 'option4', 'options', 'correct_options', 'knowledge_ids', 'answer_process', 'is_multiple', 'status', 'created_id', 'updated_at', 'oid', 'uid'], 'integer'],
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
            'name' => $this->name,
            'question_stem' => $this->question_stem,
            'option1' => $this->option1,
            'option2' => $this->option2,
            'option3' => $this->option3,
            'option4' => $this->option4,
            'options' => $this->options,
            'correct_options' => $this->correct_options,
            'knowledge_ids' => $this->knowledge_ids,
            'answer_process' => $this->answer_process,
            'is_multiple' => $this->is_multiple,
            'status' => $this->status,
            'created_id' => $this->created_id,
            'updated_at' => $this->updated_at,
            'oid' => $this->oid,
            'uid' => $this->uid,
        ]);

        return $dataProvider;
    }
}

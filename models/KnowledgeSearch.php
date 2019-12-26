<?php

namespace helearn\ggsddu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use helearn\ggsddu\models\Knowledge;

/**
 * KnowledgeSearch represents the model behind the search form of `helearn\ggsddu\models\Knowledge`.
 */
class KnowledgeSearch extends Knowledge
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'level', 'is_menu', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'name'], 'safe'],
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
        $query = Knowledge::find();

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
            'level' => $this->level,
            'is_menu' => $this->is_menu,
            'sort' => $this->sort,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}

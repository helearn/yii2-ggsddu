<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[QuestionEssay]].
 *
 * @see QuestionEssay
 */
class QuestionEssayQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return QuestionEssay[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return QuestionEssay|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

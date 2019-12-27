<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[QuestionRead]].
 *
 * @see QuestionRead
 */
class QuestionReadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return QuestionRead[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return QuestionRead|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

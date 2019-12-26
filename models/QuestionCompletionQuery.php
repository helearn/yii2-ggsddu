<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[QuestionCompletion]].
 *
 * @see QuestionCompletion
 */
class QuestionCompletionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return QuestionCompletion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return QuestionCompletion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

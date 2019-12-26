<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[QuestionReadDetailed]].
 *
 * @see QuestionReadDetailed
 */
class QuestionReadDetailedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return QuestionReadDetailed[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return QuestionReadDetailed|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

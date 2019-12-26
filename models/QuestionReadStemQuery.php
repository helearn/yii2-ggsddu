<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[QuestionReadStem]].
 *
 * @see QuestionReadStem
 */
class QuestionReadStemQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return QuestionReadStem[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return QuestionReadStem|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[QuestionCloze]].
 *
 * @see QuestionCloze
 */
class QuestionClozeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return QuestionCloze[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return QuestionCloze|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

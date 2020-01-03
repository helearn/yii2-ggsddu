<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlQuestionChoice]].
 *
 * @see HlQuestionChoice
 */
class HlQuestionChoiceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlQuestionChoice[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionChoice|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

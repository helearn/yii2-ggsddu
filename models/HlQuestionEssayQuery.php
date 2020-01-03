<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlQuestionEssay]].
 *
 * @see HlQuestionEssay
 */
class HlQuestionEssayQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlQuestionEssay[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionEssay|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

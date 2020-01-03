<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlQuestionRead]].
 *
 * @see HlQuestionRead
 */
class HlQuestionReadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlQuestionRead[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionRead|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

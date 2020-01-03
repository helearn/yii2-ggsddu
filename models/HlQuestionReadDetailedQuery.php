<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlQuestionReadDetailed]].
 *
 * @see HlQuestionReadDetailed
 */
class HlQuestionReadDetailedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlQuestionReadDetailed[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionReadDetailed|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

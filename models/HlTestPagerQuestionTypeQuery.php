<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlTestPagerQuestionType]].
 *
 * @see HlTestPagerQuestionType
 */
class HlTestPagerQuestionTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlTestPagerQuestionType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPagerQuestionType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

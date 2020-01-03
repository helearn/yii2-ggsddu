<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlTestPagerQuestion]].
 *
 * @see HlTestPagerQuestion
 */
class HlTestPagerQuestionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlTestPagerQuestion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPagerQuestion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlTestPager]].
 *
 * @see HlTestPager
 */
class HlTestPagerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlTestPager[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPager|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

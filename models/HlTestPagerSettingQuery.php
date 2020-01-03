<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlTestPagerSetting]].
 *
 * @see HlTestPagerSetting
 */
class HlTestPagerSettingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlTestPagerSetting[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPagerSetting|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

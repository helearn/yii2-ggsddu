<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[TestPagerSetting]].
 *
 * @see TestPagerSetting
 */
class TestPagerSettingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TestPagerSetting[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TestPagerSetting|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

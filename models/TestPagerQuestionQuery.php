<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[TestPagerQuestion]].
 *
 * @see TestPagerQuestion
 */
class TestPagerQuestionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TestPagerQuestion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TestPagerQuestion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

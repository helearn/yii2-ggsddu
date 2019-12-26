<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[TestPagerQuestionType]].
 *
 * @see TestPagerQuestionType
 */
class TestPagerQuestionTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TestPagerQuestionType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TestPagerQuestionType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

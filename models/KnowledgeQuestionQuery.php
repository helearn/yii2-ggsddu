<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[KnowledgeQuestion]].
 *
 * @see KnowledgeQuestion
 */
class KnowledgeQuestionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KnowledgeQuestion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KnowledgeQuestion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

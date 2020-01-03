<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlKnowledgeQuestion]].
 *
 * @see HlKnowledgeQuestion
 */
class HlKnowledgeQuestionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlKnowledgeQuestion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlKnowledgeQuestion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

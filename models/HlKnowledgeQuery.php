<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlKnowledge]].
 *
 * @see HlKnowledge
 */
class HlKnowledgeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlKnowledge[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlKnowledge|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

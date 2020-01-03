<?php

namespace helearn\ggsddu\models;

/**
 * This is the ActiveQuery class for [[HlQuestionCloze]].
 *
 * @see HlQuestionCloze
 */
class HlQuestionClozeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HlQuestionCloze[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionCloze|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

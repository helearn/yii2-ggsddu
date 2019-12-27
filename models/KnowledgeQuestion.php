<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_knowledge_question}}".
 *
 * @property int $id
 * @property string $question_type
 * @property int $question_id
 * @property int $knowledge_id
 */
class KnowledgeQuestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_knowledge_question}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_type', 'question_id', 'knowledge_id'], 'required'],
            [['question_id', 'knowledge_id'], 'integer'],
            [['question_type'], 'string', 'max' => 32],
            [['question_type', 'question_id', 'knowledge_id'], 'unique', 'targetAttribute' => ['question_type', 'question_id', 'knowledge_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'question_type' => Yii::t('app', 'Question Type'),
            'question_id' => Yii::t('app', 'Question ID'),
            'knowledge_id' => Yii::t('app', 'Knowledge ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return KnowledgeQuestionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KnowledgeQuestionQuery(get_called_class());
    }
}

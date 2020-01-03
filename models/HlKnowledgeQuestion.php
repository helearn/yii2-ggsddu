<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_knowledge_question}}".
 *
 * @property string $question_type 试题类型
 * @property int $question_id 试题编号
 * @property int $knowledge_id 知识点编号
 *
 * @property HlKnowledge $knowledge
 */
class HlKnowledgeQuestion extends \yii\db\ActiveRecord
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
            [['question_type', 'question_id'], 'unique', 'targetAttribute' => ['question_type', 'question_id']],
            [['knowledge_id'], 'exist', 'skipOnError' => true, 'targetClass' => HlKnowledge::className(), 'targetAttribute' => ['knowledge_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'question_type' => Yii::t('app', '试题类型'),
            'question_id' => Yii::t('app', '试题编号'),
            'knowledge_id' => Yii::t('app', '知识点编号'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKnowledge()
    {
        return $this->hasOne(HlKnowledge::className(), ['id' => 'knowledge_id']);
    }

    /**
     * {@inheritdoc}
     * @return HlKnowledgeQuestionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlKnowledgeQuestionQuery(get_called_class());
    }
}

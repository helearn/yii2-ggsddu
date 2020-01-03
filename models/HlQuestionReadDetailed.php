<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_read_detailed}}".
 *
 * @property int $id
 * @property int $qid 父级id
 * @property string $question_stem 题干
 * @property string $correct_answer 参考答案
 * @property string|null $answer_process 解答说明
 * @property int|null $status 状态【-1删除；0禁用；1启用】
 *
 * @property HlQuestionRead $q
 */
class HlQuestionReadDetailed extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_question_read_detailed}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qid', 'question_stem', 'correct_answer'], 'required'],
            [['qid', 'status'], 'integer'],
            [['question_stem', 'correct_answer', 'answer_process'], 'string'],
            [['qid'], 'exist', 'skipOnError' => true, 'targetClass' => HlQuestionRead::className(), 'targetAttribute' => ['qid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'qid' => Yii::t('app', '父级id'),
            'question_stem' => Yii::t('app', '题干'),
            'correct_answer' => Yii::t('app', '参考答案'),
            'answer_process' => Yii::t('app', '解答说明'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQ()
    {
        return $this->hasOne(HlQuestionRead::className(), ['id' => 'qid']);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionReadDetailedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlQuestionReadDetailedQuery(get_called_class());
    }
}

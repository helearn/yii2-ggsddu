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
 */
class QuestionReadDetailed extends \yii\db\ActiveRecord
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'qid' => Yii::t('app', 'Qid'),
            'question_stem' => Yii::t('app', 'Question Stem'),
            'correct_answer' => Yii::t('app', 'Correct Answer'),
            'answer_process' => Yii::t('app', 'Answer Process'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return QuestionReadDetailedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionReadDetailedQuery(get_called_class());
    }
}

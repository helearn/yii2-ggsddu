<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_completion}}".
 *
 * @property int $id
 * @property string $name 名称【留空自动生成】
 * @property string $question_stem 题干
 * @property string $correct_answer 正确答案[以|#|分割每个空格的答案]
 * @property string|null $answer_process 解答说明
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property int $created_id 创建时间
 * @property int $updated_id 修改时间
 * @property string|null $oqtype 原题题型[chioce,cloze,completion,essay,read]
 * @property int|null $oqid 原题编号
 * @property int|null $user_id 创建者编号
 */
class QuestionCompletion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_question_completion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'question_stem', 'correct_answer', 'created_id', 'updated_id'], 'required'],
            [['question_stem', 'correct_answer', 'answer_process'], 'string'],
            [['status', 'created_id', 'updated_id', 'oqid', 'user_id'], 'integer'],
            [['name', 'oqtype'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'question_stem' => Yii::t('app', 'Question Stem'),
            'correct_answer' => Yii::t('app', 'Correct Answer'),
            'answer_process' => Yii::t('app', 'Answer Process'),
            'status' => Yii::t('app', 'Status'),
            'created_id' => Yii::t('app', 'Created ID'),
            'updated_id' => Yii::t('app', 'Updated ID'),
            'oqtype' => Yii::t('app', 'Oqtype'),
            'oqid' => Yii::t('app', 'Oqid'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return QuestionCompletionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionCompletionQuery(get_called_class());
    }
}

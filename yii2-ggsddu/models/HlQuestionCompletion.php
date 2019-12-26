<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_completion}}".
 *
 * @property int $id
 * @property int $name 名称【留空自动生成】
 * @property int $question_stem 题干
 * @property int $correct_answer 正确答案
 * @property int $answer_process 解答说明
 * @property int $knowledge_ids 相关知识点
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property int $created_id 创建时间
 * @property int $updated_id 修改时间
 * @property int $oid 原题编号
 * @property int $uid 创建者编号
 */
class HlQuestionCompletion extends \yii\db\ActiveRecord
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
            [['id', 'name', 'question_stem', 'correct_answer', 'answer_process', 'knowledge_ids', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'required'],
            [['id', 'name', 'question_stem', 'correct_answer', 'answer_process', 'knowledge_ids', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '名称【留空自动生成】'),
            'question_stem' => Yii::t('app', '题干'),
            'correct_answer' => Yii::t('app', '正确答案'),
            'answer_process' => Yii::t('app', '解答说明'),
            'knowledge_ids' => Yii::t('app', '相关知识点'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_id' => Yii::t('app', '创建时间'),
            'updated_id' => Yii::t('app', '修改时间'),
            'oid' => Yii::t('app', '原题编号'),
            'uid' => Yii::t('app', '创建者编号'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionCompletionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlQuestionCompletionQuery(get_called_class());
    }
}

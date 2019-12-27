<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_essay}}".
 *
 * @property int $id
 * @property int $name 名称【留空自动生成】
 * @property int $question_stem 题干
 * @property int $correct_answer 参考答案
 * @property int $answer_process 解答说明
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property int $created_id 创建时间
 * @property int $updated_id 修改时间
 * @property int $oid 原题编号
 * @property int $uid 创建者编号
 */
class QuestionEssay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_question_essay}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'question_stem', 'correct_answer', 'answer_process', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'required'],
            [['name', 'question_stem', 'correct_answer', 'answer_process', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'integer'],
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
            'correct_answer' => Yii::t('app', '参考答案'),
            'answer_process' => Yii::t('app', '解答说明'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_id' => Yii::t('app', '创建时间'),
            'updated_id' => Yii::t('app', '修改时间'),
            'oid' => Yii::t('app', '原题编号'),
            'uid' => Yii::t('app', '创建者编号'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return QuestionEssayQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionEssayQuery(get_called_class());
    }
}

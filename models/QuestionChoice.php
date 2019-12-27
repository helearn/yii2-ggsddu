<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_choice}}".
 *
 * @property int $id
 * @property int $name 名称（留空自动生成）
 * @property int $question_stem 题干
 * @property int $option1 选项1
 * @property int $option2 选项2
 * @property int $option3 选项3
 * @property int $option4 选项4
 * @property int $options 其他选项【以|#|分割每个选项】
 * @property int $correct_options 正确选项
 * @property int $answer_process 解答说明
 * @property int $is_multiple 是否多选题
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property int $created_id 创建时间
 * @property int $updated_at 更新时间
 * @property int $oid 原题编号
 * @property int $uid 创建者编号
 */
class QuestionChoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_question_choice}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'question_stem', 'option1', 'option2', 'option3', 'option4', 'options', 'correct_options', 'answer_process', 'is_multiple', 'status', 'created_id', 'updated_at', 'oid', 'uid'], 'required'],
            [['name', 'question_stem', 'option1', 'option2', 'option3', 'option4', 'options', 'correct_options', 'answer_process', 'is_multiple', 'status', 'created_id', 'updated_at', 'oid', 'uid'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '名称（留空自动生成）'),
            'question_stem' => Yii::t('app', '题干'),
            'option1' => Yii::t('app', '选项1'),
            'option2' => Yii::t('app', '选项2'),
            'option3' => Yii::t('app', '选项3'),
            'option4' => Yii::t('app', '选项4'),
            'options' => Yii::t('app', '其他选项【以|#|分割每个选项】'),
            'correct_options' => Yii::t('app', '正确选项'),
            'answer_process' => Yii::t('app', '解答说明'),
            'is_multiple' => Yii::t('app', '是否多选题'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_id' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
            'oid' => Yii::t('app', '原题编号'),
            'uid' => Yii::t('app', '创建者编号'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return QuestionChoiceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionChoiceQuery(get_called_class());
    }
}

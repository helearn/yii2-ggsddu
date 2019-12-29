<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_choice}}".
 *
 * @property int $id
 * @property string $name 名称（留空自动生成）
 * @property string $question_stem 题干
 * @property string $option1 选项1
 * @property string $option2 选项2
 * @property string $option3 选项3
 * @property string $option4 选项4
 * @property string $options 其他选项【以|#|分割每个选项】
 * @property string $correct_options 正确选项
 * @property string|null $answer_process 解答说明
 * @property int $is_multiple 是否多选题[0单选，1多选]
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 * @property string|null $oqtype 原题题型[chioce,cloze,completion,essay,read]
 * @property int|null $oqid 原题编号
 * @property int|null $user_id 创建者编号
 *
 * @property User $user
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
            [['name', 'question_stem', 'option1', 'option2', 'option3', 'option4', 'options', 'correct_options'], 'required'],
            [['question_stem', 'option1', 'option2', 'option3', 'option4', 'options', 'answer_process'], 'string'],
            [['is_multiple', 'status', 'oqid', 'user_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'correct_options', 'oqtype'], 'string', 'max' => 32],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'option1' => Yii::t('app', 'Option1'),
            'option2' => Yii::t('app', 'Option2'),
            'option3' => Yii::t('app', 'Option3'),
            'option4' => Yii::t('app', 'Option4'),
            'options' => Yii::t('app', 'Options'),
            'correct_options' => Yii::t('app', 'Correct Options'),
            'answer_process' => Yii::t('app', 'Answer Process'),
            'is_multiple' => Yii::t('app', 'Is Multiple'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'oqtype' => Yii::t('app', 'Oqtype'),
            'oqid' => Yii::t('app', 'Oqid'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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

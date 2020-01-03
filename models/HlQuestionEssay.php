<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_essay}}".
 *
 * @property int $id
 * @property string $name 名称【留空自动生成】
 * @property string $question_stem 写作题、解答题
 * @property string $correct_answer 参考答案
 * @property string|null $answer_process 解答说明
 * @property int|null $status 状态【-1删除；0禁用；1启用】
 * @property string|null $created_at 创建时间
 * @property string|null $updated_at 修改时间
 * @property string|null $oqtype 原题题型[chioce,cloze,completion,essay,read]
 * @property int|null $oqid 原题编号
 * @property int|null $user_id 创建者编号
 *
 * @property User $user
 */
class HlQuestionEssay extends \yii\db\ActiveRecord
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
            [['name', 'question_stem', 'correct_answer'], 'required'],
            [['question_stem', 'correct_answer', 'answer_process'], 'string'],
            [['status', 'oqid', 'user_id'], 'integer'],
            [['created_at'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['updated_at'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'oqtype'], 'string', 'max' => 32],
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
            'name' => Yii::t('app', '名称【留空自动生成】'),
            'question_stem' => Yii::t('app', '写作题、解答题'),
            'correct_answer' => Yii::t('app', '参考答案'),
            'answer_process' => Yii::t('app', '解答说明'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '修改时间'),
            'oqtype' => Yii::t('app', '原题题型[chioce,cloze,completion,essay,read]'),
            'oqid' => Yii::t('app', '原题编号'),
            'user_id' => Yii::t('app', '创建者编号'),
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
     * @return HlQuestionEssayQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlQuestionEssayQuery(get_called_class());
    }
}

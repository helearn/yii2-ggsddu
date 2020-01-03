<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_read}}".
 *
 * @property int $id
 * @property string|null $name 名称【留空自动生成】
 * @property string $question_stem 阅读题
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property string|null $created_at 创建时间
 * @property string|null $updated_at 修改时间
 * @property string|null $oqtype 原题题型[chioce,cloze,completion,essay,read]
 * @property int|null $oqid 原题编号
 * @property int|null $user_id 创建者编号
 *
 * @property User $id0
 * @property HlQuestionReadDetailed[] $hlQuestionReadDetaileds
 */
class HlQuestionRead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_question_read}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_stem'], 'required'],
            [['question_stem'], 'string'],
            [['status', 'oqid', 'user_id'], 'integer'],
            [['created_at'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['updated_at'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'oqtype'], 'string', 'max' => 32],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
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
            'question_stem' => Yii::t('app', '阅读题'),
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
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHlQuestionReadDetaileds()
    {
        return $this->hasMany(HlQuestionReadDetailed::className(), ['qid' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return HlQuestionReadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlQuestionReadQuery(get_called_class());
    }
}

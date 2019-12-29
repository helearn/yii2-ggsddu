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
 */
class QuestionRead extends \yii\db\ActiveRecord
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
            [['created_at', 'updated_at'], 'safe'],
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
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'oqtype' => Yii::t('app', 'Oqtype'),
            'oqid' => Yii::t('app', 'Oqid'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return QuestionReadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionReadQuery(get_called_class());
    }
}

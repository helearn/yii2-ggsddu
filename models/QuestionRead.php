<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_read}}".
 *
 * @property int $id
 * @property string|null $name 名称【留空自动生成】
 * @property string $title 标题
 * @property string $question_stem 题干
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property string|null $created_at 创建时间
 * @property string|null $updated_at 修改时间
 * @property int $oid 原题编号
 * @property int $uid 创建者编号
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
            [['title', 'question_stem', 'status', 'oid', 'uid'], 'required'],
            [['title', 'question_stem'], 'string'],
            [['status', 'oid', 'uid'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 32],
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
            'title' => Yii::t('app', '标题'),
            'question_stem' => Yii::t('app', '题干'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '修改时间'),
            'oid' => Yii::t('app', '原题编号'),
            'uid' => Yii::t('app', '创建者编号'),
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

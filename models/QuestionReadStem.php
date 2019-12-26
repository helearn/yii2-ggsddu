<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_question_read_stem}}".
 *
 * @property int $id
 * @property int $name 名称【留空自动生成】
 * @property string $title 标题
 * @property int $question_stem 题干
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property int $created_id 创建时间
 * @property int $updated_id 修改时间
 * @property int $oid 原题编号
 * @property int $uid 创建者编号
 */
class QuestionReadStem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_question_read_stem}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'title', 'question_stem', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'required'],
            [['id', 'name', 'question_stem', 'status', 'created_id', 'updated_id', 'oid', 'uid'], 'integer'],
            [['title'], 'string', 'max' => 512],
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
            'title' => Yii::t('app', '标题'),
            'question_stem' => Yii::t('app', '题干'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_id' => Yii::t('app', '创建时间'),
            'updated_id' => Yii::t('app', '修改时间'),
            'oid' => Yii::t('app', '原题编号'),
            'uid' => Yii::t('app', '创建者编号'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return QuestionReadStemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionReadStemQuery(get_called_class());
    }
}

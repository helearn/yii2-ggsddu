<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_knowledge}}".
 *
 * @property int $id
 * @property string $title 标题
 * @property string $name 名称
 * @property int $pid 父级id
 * @property int $level 级别
 * @property int $is_menu 是否菜单
 * @property int $sort 排序
 * @property int $status 状态（-1删除；0禁用；1启用）
 * @property int $created_at 创建时间
 * @property int $updated_at 修改时间
 */
class HlKnowledge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_knowledge}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'pid', 'level', 'is_menu', 'sort', 'status', 'created_at', 'updated_at'], 'required'],
            [['pid', 'level', 'is_menu', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 64],
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
            'title' => Yii::t('app', '标题'),
            'name' => Yii::t('app', '名称'),
            'pid' => Yii::t('app', '父级id'),
            'level' => Yii::t('app', '级别'),
            'is_menu' => Yii::t('app', '是否菜单'),
            'sort' => Yii::t('app', '排序'),
            'status' => Yii::t('app', '状态（-1删除；0禁用；1启用）'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '修改时间'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return HlKnowledgeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlKnowledgeQuery(get_called_class());
    }
}

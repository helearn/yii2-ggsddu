<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_test_pager}}".
 *
 * @property int $id
 * @property int $name 名称【留空自动生成】
 * @property int $title 试卷标题
 * @property int $explanation 试卷说明
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property int $created_at
 * @property int $updated_at
 * @property int $start_at 测试开始时间
 * @property int $end_at 测试结束时间
 * @property int $oid 原卷编号
 * @property int $uid 创建者编号
 */
class TestPager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_test_pager}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'title', 'explanation', 'status', 'created_at', 'updated_at', 'start_at', 'end_at', 'oid', 'uid'], 'required'],
            [['id', 'name', 'title', 'explanation', 'status', 'created_at', 'updated_at', 'start_at', 'end_at', 'oid', 'uid'], 'integer'],
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
            'title' => Yii::t('app', '试卷标题'),
            'explanation' => Yii::t('app', '试卷说明'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'start_at' => Yii::t('app', '测试开始时间'),
            'end_at' => Yii::t('app', '测试结束时间'),
            'oid' => Yii::t('app', '原卷编号'),
            'uid' => Yii::t('app', '创建者编号'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TestPagerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestPagerQuery(get_called_class());
    }
}

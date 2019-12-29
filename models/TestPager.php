<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_test_pager}}".
 *
 * @property int $id
 * @property string $name 名称【留空自动生成】
 * @property string $title 试卷标题
 * @property string|null $explanation 试卷说明
 * @property int $status 状态【-1删除；0禁用；1启用】
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 * @property string|null $start_at 测试开始时间
 * @property string|null $end_at 测试结束时间
 * @property int $share_level 共享级别
 * @property int|null $otpid 原卷编号
 * @property int|null $user_id 创建者编号
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
            [['name', 'title', 'created_at', 'updated_at'], 'required'],
            [['explanation'], 'string'],
            [['status', 'share_level', 'otpid', 'user_id'], 'integer'],
            [['created_at', 'updated_at', 'start_at', 'end_at'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['title'], 'string', 'max' => 64],
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
            'title' => Yii::t('app', 'Title'),
            'explanation' => Yii::t('app', 'Explanation'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'start_at' => Yii::t('app', 'Start At'),
            'end_at' => Yii::t('app', 'End At'),
            'share_level' => Yii::t('app', 'Share Level'),
            'otpid' => Yii::t('app', 'Otpid'),
            'user_id' => Yii::t('app', 'User ID'),
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

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
 *
 * @property User $user
 * @property HlTestPagerSetting[] $hlTestPagerSettings
 */
class HlTestPager extends \yii\db\ActiveRecord
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
            [['created_at'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['updated_at'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['created_at', 'updated_at', 'start_at', 'end_at'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['title'], 'string', 'max' => 64],
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
            'title' => Yii::t('app', '试卷标题'),
            'explanation' => Yii::t('app', '试卷说明'),
            'status' => Yii::t('app', '状态【-1删除；0禁用；1启用】'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
            'start_at' => Yii::t('app', '测试开始时间'),
            'end_at' => Yii::t('app', '测试结束时间'),
            'share_level' => Yii::t('app', '共享级别'),
            'otpid' => Yii::t('app', '原卷编号'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getHlTestPagerSettings()
    {
        return $this->hasMany(HlTestPagerSetting::className(), ['tpid' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPagerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlTestPagerQuery(get_called_class());
    }
}

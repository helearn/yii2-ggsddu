<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_test_pager_setting}}".
 *
 * @property int $id
 * @property int $pid 试卷编号
 * @property string $type 题型【choice;completion;cloze;read;essay】
 * @property string $title 题型标题
 * @property int $sort 卷中排序
 * @property int $default_score 默认每题分值
 */
class TestPagerSetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_test_pager_setting}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid', 'type', 'title', 'sort', 'default_score'], 'required'],
            [['pid', 'sort', 'default_score'], 'integer'],
            [['type'], 'string', 'max' => 32],
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
            'pid' => Yii::t('app', '试卷编号'),
            'type' => Yii::t('app', '题型【choice;completion;cloze;read;essay】'),
            'title' => Yii::t('app', '题型标题'),
            'sort' => Yii::t('app', '卷中排序'),
            'default_score' => Yii::t('app', '默认每题分值'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TestPagerSettingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestPagerSettingQuery(get_called_class());
    }
}

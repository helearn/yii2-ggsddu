<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_test_pager_setting}}".
 *
 * @property int $id
 * @property int $tpid 试卷编号
 * @property string $question_type 题型【choice;completion;cloze;read;essay】
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
            [['tpid', 'question_type', 'title', 'sort', 'default_score'], 'required'],
            [['tpid', 'sort', 'default_score'], 'integer'],
            [['question_type'], 'string', 'max' => 32],
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
            'tpid' => Yii::t('app', 'Tpid'),
            'question_type' => Yii::t('app', 'Question Type'),
            'title' => Yii::t('app', 'Title'),
            'sort' => Yii::t('app', 'Sort'),
            'default_score' => Yii::t('app', 'Default Score'),
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

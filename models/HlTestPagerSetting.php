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
 *
 * @property HlTestPagerQuestion[] $hlTestPagerQuestions
 * @property HlTestPager $tp
 */
class HlTestPagerSetting extends \yii\db\ActiveRecord
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
            [['tpid'], 'exist', 'skipOnError' => true, 'targetClass' => HlTestPager::className(), 'targetAttribute' => ['tpid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tpid' => Yii::t('app', '试卷编号'),
            'question_type' => Yii::t('app', '题型【choice;completion;cloze;read;essay】'),
            'title' => Yii::t('app', '题型标题'),
            'sort' => Yii::t('app', '卷中排序'),
            'default_score' => Yii::t('app', '默认每题分值'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHlTestPagerQuestions()
    {
        return $this->hasMany(HlTestPagerQuestion::className(), ['tpsid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTp()
    {
        return $this->hasOne(HlTestPager::className(), ['id' => 'tpid']);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPagerSettingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlTestPagerSettingQuery(get_called_class());
    }
}

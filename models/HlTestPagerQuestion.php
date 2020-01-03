<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_test_pager_question}}".
 *
 * @property int $id
 * @property int $tpsid 所属试卷题型编号
 * @property int $question_id 试题题库编号
 * @property int $sort 卷中试题序号
 * @property int $score 卷中试题分值
 *
 * @property HlTestPagerSetting $tps
 */
class HlTestPagerQuestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_test_pager_question}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tpsid', 'question_id', 'sort', 'score'], 'required'],
            [['tpsid', 'question_id', 'sort', 'score'], 'integer'],
            [['tpsid'], 'exist', 'skipOnError' => true, 'targetClass' => HlTestPagerSetting::className(), 'targetAttribute' => ['tpsid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tpsid' => Yii::t('app', '所属试卷题型编号'),
            'question_id' => Yii::t('app', '试题题库编号'),
            'sort' => Yii::t('app', '卷中试题序号'),
            'score' => Yii::t('app', '卷中试题分值'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTps()
    {
        return $this->hasOne(HlTestPagerSetting::className(), ['id' => 'tpsid']);
    }

    /**
     * {@inheritdoc}
     * @return HlTestPagerQuestionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HlTestPagerQuestionQuery(get_called_class());
    }
}

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
 */
class TestPagerQuestion extends \yii\db\ActiveRecord
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tpsid' => Yii::t('app', 'Tpsid'),
            'question_id' => Yii::t('app', 'Question ID'),
            'sort' => Yii::t('app', 'Sort'),
            'score' => Yii::t('app', 'Score'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TestPagerQuestionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestPagerQuestionQuery(get_called_class());
    }
}

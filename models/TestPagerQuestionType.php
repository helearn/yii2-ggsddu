<?php

namespace helearn\ggsddu\models;

use Yii;

/**
 * This is the model class for table "{{%hl_test_pager_question_type}}".
 *
 * @property int $id
 * @property int $pid 试卷编号
 * @property int $type 题型【choice;completion;cloze;read;essay】
 * @property int $title 题型标题
 * @property int $sort 卷中排序
 * @property int $default_score 默认每题分值
 */
class TestPagerQuestionType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hl_test_pager_question_type}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'type', 'title', 'sort', 'default_score'], 'required'],
            [['id', 'pid', 'type', 'title', 'sort', 'default_score'], 'integer'],
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
            'pid' => Yii::t('app', '试卷编号'),
            'type' => Yii::t('app', '题型【choice;completion;cloze;read;essay】'),
            'title' => Yii::t('app', '题型标题'),
            'sort' => Yii::t('app', '卷中排序'),
            'default_score' => Yii::t('app', '默认每题分值'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TestPagerQuestionTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestPagerQuestionTypeQuery(get_called_class());
    }
}

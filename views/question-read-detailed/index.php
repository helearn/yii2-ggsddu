<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel helearn\ggsddu\models\QuestionReadDetailedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('helearn-yii2ggsddu', 'Question Read Detaileds');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-read-detailed-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Create Question Read Detailed'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'qid',
            'question_stem:ntext',
            'correct_answer:ntext',
            'answer_process:ntext',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

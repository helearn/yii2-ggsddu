<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel helearn\ggsddu\models\QuestionCompletionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('helearn-yii2ggsddu', 'Question Completions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-completion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Create Question Completion'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'question_stem:ntext',
            'correct_answer:ntext',
            'answer_process:ntext',
            //'status',
            //'created_id',
            //'updated_id',
            //'oid',
            //'uid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

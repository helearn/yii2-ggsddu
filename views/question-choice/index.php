<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel helearn\ggsddu\models\QuestionChoiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('helearn-yii2ggsddu', 'Question Choices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-choice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Create Question Choice'), ['create'], ['class' => 'btn btn-success']) ?>
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
            'option1:ntext',
            'option2:ntext',
            //'option3:ntext',
            //'option4:ntext',
            //'options:ntext',
            //'correct_options',
            //'answer_process:ntext',
            //'is_multiple',
            //'status',
            //'created_id',
            //'updated_at',
            //'oid',
            //'uid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

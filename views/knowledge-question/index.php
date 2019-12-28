<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel helearn\ggsddu\models\KnowledgeQuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('helearn-yii2ggsddu', 'Knowledge Questions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knowledge-question-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Create Knowledge Question'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'question_type',
            'question_id',
            'knowledge_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

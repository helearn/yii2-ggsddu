<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionEssay */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Question Essays'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="question-essay-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('helearn-yii2ggsddu', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'question_stem:ntext',
            'correct_answer:ntext',
            'answer_process:ntext',
            'status',
            'created_id',
            'updated_id',
            'oid',
            'uid',
        ],
    ]) ?>

</div>

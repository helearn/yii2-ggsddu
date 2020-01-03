<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\HlKnowledgeQuestion */

$this->title = $model->question_type;
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Hl Knowledge Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hl-knowledge-question-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Update'), ['update', 'question_type' => $model->question_type, 'question_id' => $model->question_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('helearn-yii2ggsddu', 'Delete'), ['delete', 'question_type' => $model->question_type, 'question_id' => $model->question_id], [
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
            'question_type',
            'question_id',
            'knowledge_id',
        ],
    ]) ?>

</div>

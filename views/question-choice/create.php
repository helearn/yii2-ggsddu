<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionChoice */

$this->title = Yii::t('app', 'Create Hl Question Choice');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hl Question Choices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hl-question-choice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

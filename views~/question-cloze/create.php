<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionCloze */

$this->title = Yii::t('helearn-yii2ggsddu', 'Create Question Cloze');
$this->params['breadcrumbs'][] = ['label' => Yii::t('helearn-yii2ggsddu', 'Question Clozes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-cloze-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

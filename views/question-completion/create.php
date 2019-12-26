<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionCompletion */

$this->title = Yii::t('app', 'Create Hl Question Completion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hl Question Completions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hl-question-completion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

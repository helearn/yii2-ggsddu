<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\TestPagerQuestionType */

$this->title = Yii::t('app', 'Create Hl Test Pager Question Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hl Test Pager Question Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hl-test-pager-question-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

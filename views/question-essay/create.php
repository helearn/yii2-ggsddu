<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionEssay */

$this->title = Yii::t('app', 'Create Hl Question Essay');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hl Question Essays'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hl-question-essay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

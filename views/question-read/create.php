<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model helearn\ggsddu\models\QuestionRead */

$this->title = Yii::t('app', 'Create Question Read');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Question Reads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-read-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
